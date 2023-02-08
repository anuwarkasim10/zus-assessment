
function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + (d.getDate()),
        year = d.getFullYear();
    
        if (month.length < 2)
            month = '0' + month;
        if (day.length < 2)
            day = '0' + day;
        
        return [year, month, day].join('-');
}

$( document ).ready(function() {

    var today = new Date().toJSON().replace(/..(..)-(..)-(..).*/, '$2/$3/$1');

    var titleLabel = document.querySelector('.landing_label');
    titleLabel.innerHTML = variables.href;

    // This is the default params
    const params = {
        output: 'json',
        date: today,
        site_id: variables.site_id,
        sitekey: variables.sitekey,
        type: 'visitors-list',
        href: encodeURIComponent(variables.href)
    }

    const paramsSummary = {
        output: 'json',
        date: today,
        site_id: variables.site_id,
        sitekey: variables.sitekey,
        type: 'segmentation',
        segments: 'summary',
        href: encodeURIComponent(variables.href),
    }

    function reset() {
        // reset to default
        var base_href = base;
        const params = {
            output: 'json',
            date: today,
            site_id: variables.site_id,
            sitekey: variables.sitekey,
            type: 'visitors-list',
            href: encodeURIComponent(base_href)
        }

        const paramsSummary = {
            output: 'json',
            date: today,
            site_id: variables.site_id,
            sitekey: variables.sitekey,
            type: 'segmentation',
            segments: 'summary',
            href: encodeURIComponent(base_href),
        }

        reloadList(params.date);
        getSummaryCount(paramsSummary.date);
    }

    $('#date_filter').on('change', function() {
        // handle change date filter
        var date = new Date();
        date = date.setDate(date.getDate() - $(this).val());
        date = formatDate(date);

        // call get data ajax
        reloadList(date);
        getSummaryCount(date);
    });

    $('#page_filter').on('change', function() {

        var getDateFilter = $('#date_filter').val();
        // handle change date filter
        var date = new Date();
        date = date.setDate(date.getDate() - getDateFilter);
        date = formatDate(date);

        if ($(this).val === 'home') {
            reset();
        } else {
            reloadList(date, $(this).val());
            getSummaryCount(date, $(this).val());
        }
    });

    var nextPage = document.querySelector('.next-page');

    nextPage.addEventListener('click', function() {
        params['page']
    })

    function reloadList(date, page) {

        getSummaryCount();

        if (date) {
            params.date = date;
        } else {
            params.date = formatDate(today);
        }

        if (page) {
            var base_href = base;
            params.href = base_href + page;
            params.href = encodeURIComponent(params.href);
        } else if (page == null) {
            var base_href = base;
            params.href = encodeURIComponent(base_href);
        }

        url = `${variables.webstats}?output=${params.output}&site_id=${params.site_id}&sitekey=${params.sitekey}&date=${params.date}&type=${params.type}&href=${params.href}`;
    
        $.ajax({
            type:'get',
            url: url,
            dataType:'json',
            success:function(data){
                if (data[0].error) {
                    return;
                }
                var clean = data[0].dates[0].items;

                const firstRow = `<tr>
                                    <th>Time</th>
                                    <th>Visitor</th>
                                    <th>Session</th>
                                    <th>Landing Page</th>
                                    <th>Referrer</th>
                                </tr>`

                const tableData = clean.map((value) => {
                    stripTime = value.time_pretty.split(', ')
                    return (
                        `<tr>
                            <td>${stripTime[1]}</td>
                            <td>${value.organization}</td>
                            <td>${value.actions}</td>
                            <td>${value.landing_page}</td>
                            <td>${value.referrer_domain ? `${value.referrer_domain}` : '-'}
                                <a href=${value.referrer_url ? `${value.referrer_url}` : ''} target="_blank">
                                
                                ${value.referrer_url ? `
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg" viewBox="0 0 16 16">
                                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z"/>
                                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z"/>
                                    </svg>
                                    ` : ''}

                                </a>
                            </td>
                        </tr>`
                    );
                }).join("")

                const tableBody = document.querySelector('#table-content');
                tableBody.innerHTML = firstRow + tableData;
            },
            error:function(err){
                console.log(err);
            }
        });
    };

    function getSummaryCount(date, page) {

        if (date) {
            paramsSummary.date = date;
        } else {
            paramsSummary.date = formatDate(today);
        }

        if (page) {
            var base_href = base;
            paramsSummary.href = base_href + page;
            paramsSummary.href = encodeURIComponent(params.href);
        } else if (page == null) {
            var base_href = base;
            paramsSummary.href = encodeURIComponent(base_href);
        }

        url = `${variables.webstats}?output=${paramsSummary.output}&site_id=${paramsSummary.site_id}&sitekey=${paramsSummary.sitekey}&date=${paramsSummary.date}&type=${paramsSummary.type}&segments=${paramsSummary.segments}&href=${paramsSummary.href}`;
    
        $.ajax({
            type:'get',
            url: url,
            dataType:'json',
            success:function(data){
                if (data[0].error) {
                    return;
                }
                var cleaned = data[0].dates[0].items;

                const summaryBody = document.querySelector('#summary-content');

                const peoplesSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>`
                const peopleSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    </svg>`
                const actionsSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-activity" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2Z"/>
                                    </svg>`
                
                const totalTimeSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                </svg>
                                `

                const aveTimeSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                </svg>
                                `

                const bouncePercentSvg = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                                <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </svg>
                                `

                const summaryData = `<tr>
                                        <th></th>
                                        <th><strong>Total</strong></th>
                                    </tr>
                                    <tr>
                                        <th>${peoplesSvg} ${cleaned[0]?.title}</th>
                                        <th id="visitorCount">${cleaned[0]?.value}</th>
                                    </tr>
                                    <tr>
                                        <th>${peopleSvg} ${cleaned[1]?.title}</th>
                                        <th>${cleaned[1]?.value}</th>
                                    </tr>
                                    <tr>
                                        <th>${actionsSvg} ${cleaned[2]?.title}</th>
                                        <th>${cleaned[2]?.value}</th>
                                    </tr>
                                    <tr>
                                        <th>${actionsSvg} ${cleaned[3]?.title}</th>
                                        <th>${cleaned[3]?.value}</th>
                                    </tr>
                                    <tr>
                                        <th>${totalTimeSvg} ${cleaned[4]?.title}</th>
                                        <th>${cleaned[4]?.value}</th>
                                    </tr>
                                    <tr>
                                        <th>${aveTimeSvg} ${cleaned[5]?.title}</th>
                                        <th>${cleaned[5]?.value}</th>
                                    </tr>
                                    <tr>
                                        <th>${bouncePercentSvg} ${cleaned[6]?.title}</th>
                                        <th>${cleaned[6]?.value} %</th>
                                    </tr>
                                    `

                summaryBody.innerHTML = summaryData;
            },
            error:function(err){
                console.log(err);
            }
        });
    };

    reloadList();

    $.ajaxSetup ({
        cache: false
    });

    setInterval(function(){
        reset();
        reloadList();
    }, 10000000);  // 10,000 sec
});