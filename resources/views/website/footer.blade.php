<!-- footer new -->
<link rel="stylesheet" href="{{ asset('website/css/elementor-css-post-402.css') }}" />


<style>
  @media only screen and (max-width: 600px) {

    .tick {
      width: 10%;
    }
  }
</style>


<!-- <div data-elementor-type="footer" data-elementor-id="402" class="elementor elementor-402 elementor-location-footer">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-293d180 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="293d180" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-962a7f9" data-id="962a7f9" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <section class="elementor-section elementor-inner-section elementor-element elementor-element-cfb9751 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cfb9751" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a7c7f74" data-id="a7c7f74" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-a42ac81 elementor-widget elementor-widget-heading" data-id="a42ac81" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2 class="elementor-heading-title elementor-size-default">
                        to subscribe
                      </h2>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-2cbafd1 elementor-widget elementor-widget-text-editor" data-id="2cbafd1" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p>
                        Be a real foodie and subscribe to get the most out
                        of Singapore Food Festival 2022!
                      </p>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-13f657e elementor-button-align-start elementor-widget elementor-widget-form" data-id="13f657e" data-element_type="widget" data-settings='{"step_next_label":"Next","step_previous_label":"Previous","button_width":"100","step_type":"number_text","step_icon_shape":"circle"}' data-widget_type="form.default">
                    <div class="elementor-widget-container">
                      <style>
                        /*! elementor-pro - v3.7.2 - 15-06-2022 */
                        .elementor-button.elementor-hidden,
                        .elementor-hidden {
                          display: none;
                        }

                        .e-form__step {
                          width: 100%;
                        }

                        .e-form__step:not(.elementor-hidden) {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -ms-flex-wrap: wrap;
                          flex-wrap: wrap;
                        }

                        .e-form__buttons {
                          -ms-flex-wrap: wrap;
                          flex-wrap: wrap;
                        }

                        .e-form__buttons,
                        .e-form__buttons__wrapper {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                        }

                        .e-form__indicators {
                          -webkit-box-pack: justify;
                          -ms-flex-pack: justify;
                          justify-content: space-between;
                          -ms-flex-wrap: nowrap;
                          flex-wrap: nowrap;
                          font-size: 13px;
                          margin-bottom: var(--e-form-steps-indicators-spacing);
                        }

                        .e-form__indicators,
                        .e-form__indicators__indicator {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                        }

                        .e-form__indicators__indicator {
                          -webkit-box-orient: vertical;
                          -webkit-box-direction: normal;
                          -ms-flex-direction: column;
                          flex-direction: column;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -ms-flex-preferred-size: 0;
                          flex-basis: 0;
                          padding: 0 var(--e-form-steps-divider-gap);
                        }

                        .e-form__indicators__indicator__progress {
                          width: 100%;
                          position: relative;
                          background-color: var(--e-form-steps-indicator-progress-background-color);
                          border-radius: var(--e-form-steps-indicator-progress-border-radius);
                          overflow: hidden;
                        }

                        .e-form__indicators__indicator__progress__meter {
                          width: var(--e-form-steps-indicator-progress-meter-width,
                              0);
                          height: var(--e-form-steps-indicator-progress-height);
                          line-height: var(--e-form-steps-indicator-progress-height);
                          padding-right: 15px;
                          border-radius: var(--e-form-steps-indicator-progress-border-radius);
                          background-color: var(--e-form-steps-indicator-progress-color);
                          color: var(--e-form-steps-indicator-progress-meter-color);
                          text-align: right;
                          -webkit-transition: width 0.1s linear;
                          -o-transition: width 0.1s linear;
                          transition: width 0.1s linear;
                        }

                        .e-form__indicators__indicator:first-child {
                          padding-left: 0;
                        }

                        .e-form__indicators__indicator:last-child {
                          padding-right: 0;
                        }

                        .e-form__indicators__indicator--state-inactive {
                          color: var(--e-form-steps-indicator-inactive-primary-color,
                              #c2cbd2);
                        }

                        .e-form__indicators__indicator--state-inactive [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                          background-color: var(--e-form-steps-indicator-inactive-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-inactive object,
                        .e-form__indicators__indicator--state-inactive svg {
                          fill: var(--e-form-steps-indicator-inactive-primary-color,
                              #c2cbd2);
                        }

                        .e-form__indicators__indicator--state-active {
                          color: var(--e-form-steps-indicator-active-primary-color,
                              #39b54a);
                          border-color: var(--e-form-steps-indicator-active-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-active [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                          background-color: var(--e-form-steps-indicator-active-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-active object,
                        .e-form__indicators__indicator--state-active svg {
                          fill: var(--e-form-steps-indicator-active-primary-color,
                              #39b54a);
                        }

                        .e-form__indicators__indicator--state-completed {
                          color: var(--e-form-steps-indicator-completed-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-completed [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                          background-color: var(--e-form-steps-indicator-completed-primary-color,
                              #39b54a);
                        }

                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                          color: var(--e-form-steps-indicator-completed-primary-color,
                              #39b54a);
                        }

                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                          color: var(--e-form-steps-indicator-completed-primary-color,
                              #39b54a);
                          background-color: initial;
                        }

                        .e-form__indicators__indicator--state-completed object,
                        .e-form__indicators__indicator--state-completed svg {
                          fill: var(--e-form-steps-indicator-completed-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator__icon {
                          width: var(--e-form-steps-indicator-padding,
                              30px);
                          height: var(--e-form-steps-indicator-padding,
                              30px);
                          font-size: var(--e-form-steps-indicator-icon-size);
                          border-width: 1px;
                          border-style: solid;
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                          overflow: hidden;
                          margin-bottom: 10px;
                        }

                        .e-form__indicators__indicator__icon img,
                        .e-form__indicators__indicator__icon object,
                        .e-form__indicators__indicator__icon svg {
                          width: var(--e-form-steps-indicator-icon-size);
                          height: auto;
                        }

                        .e-form__indicators__indicator__icon .e-font-icon-svg {
                          height: 1em;
                        }

                        .e-form__indicators__indicator__number {
                          width: var(--e-form-steps-indicator-padding,
                              30px);
                          height: var(--e-form-steps-indicator-padding,
                              30px);
                          border-width: 1px;
                          border-style: solid;
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                          margin-bottom: 10px;
                        }

                        .e-form__indicators__indicator--shape-circle {
                          border-radius: 50%;
                        }

                        .e-form__indicators__indicator--shape-square {
                          border-radius: 0;
                        }

                        .e-form__indicators__indicator--shape-rounded {
                          border-radius: 5px;
                        }

                        .e-form__indicators__indicator--shape-none {
                          border: 0;
                        }

                        .e-form__indicators__indicator__label {
                          text-align: center;
                        }

                        .e-form__indicators__indicator__separator {
                          width: 100%;
                          height: var(--e-form-steps-divider-width);
                          background-color: #c2cbd2;
                        }

                        .e-form__indicators--type-icon,
                        .e-form__indicators--type-icon_text,
                        .e-form__indicators--type-number,
                        .e-form__indicators--type-number_text {
                          -webkit-box-align: start;
                          -ms-flex-align: start;
                          align-items: flex-start;
                        }

                        .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
                        .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
                        .e-form__indicators--type-number .e-form__indicators__indicator__separator,
                        .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                          margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2);
                        }

                        .elementor-field-type-hidden {
                          display: none;
                        }

                        .elementor-field-type-html {
                          display: inline-block;
                        }

                        .elementor-login .elementor-lost-password,
                        .elementor-login .elementor-remember-me {
                          font-size: 0.85em;
                        }

                        .elementor-field-type-recaptcha_v3 .elementor-field-label {
                          display: none;
                        }

                        .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                          z-index: 1;
                        }

                        .elementor-button .elementor-form-spinner {
                          -webkit-box-ordinal-group: 4;
                          -ms-flex-order: 3;
                          order: 3;
                        }

                        .elementor-form .elementor-button>span {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                        }

                        .elementor-form .elementor-button .elementor-button-text {
                          white-space: normal;
                          -webkit-box-flex: 0;
                          -ms-flex-positive: 0;
                          flex-grow: 0;
                        }

                        .elementor-form .elementor-button svg {
                          height: auto;
                        }

                        .elementor-form .elementor-button .e-font-icon-svg {
                          height: 1em;
                        }
                      </style>
                      <form action="javascript:void(0)" class="elementor-form" method="POST" name="New Form">
                        <input type="hidden" name="post_id" value="402" />
                        <input type="hidden" name="form_id" value="13f657e" />
                        <input type="hidden" name="referer_title" value="featured-stories" />

                        <input type="hidden" name="queried_id" value="1667" />

                        <div class="elementor-form-fields-wrapper elementor-labels-">
                          <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                            <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                              Email
                            </label>
                            <input size="1" type="email" name="form_fields[email]" id="newsletter_email" class="elementor-field elementor-size-xs elementor-field-textual" placeholder="Email Address" required="required" aria-required="true" />
                          </div>
                          <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_3a405a0 elementor-col-100">
                            <label for="form-field-field_3a405a0" class="elementor-field-label elementor-screen-only">
                            </label>
                            <div class="elementor-field-subgroup">
                              <span class="elementor-field-option"><input type="checkbox" name="checkbox_newsletter" value="Yes, I consent to receiving emails related to Singapore Food Festival 2022." id="checkbox_newsletter" name="form_fields[field_3a405a0]" checked />
                                <label for="form-field-field_3a405a0-0">Yes, I consent to receiving emails
                                  related to Singapore Food Festival
                                  2022.</label></span>
                              <div class=" p-2 w-2" id="error_newsletter" style="display: none; color:#ff0000; font-weight:bold">

                              </div>
                              <div class="p-2" id="error_email_newsletter" style="display: none; color:#ff0000; font-weight:bold">
                              </div>
                            </div>
                          </div>
                          <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                            <button type="submit" id="btn-save-newsletter" class="elementor-button elementor-size-xs">
                              <span>
                                <span class="elementor-align-icon-right elementor-button-icon">
                                  <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                </span>
                                <span class="elementor-button-text">SUBSCRIBE</span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cdfdd52" data-id="cdfdd52" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4917198" data-id="4917198" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-1b02567 elementor-widget elementor-widget-text-editor" data-id="1b02567" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('/') }}">Home</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('onlinemasterclass') }}">Online Masterclasses</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('enter-virtualmarketplace') }}">Virtual Marketplace</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('festivalvillage') }}">Festival Village</a></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6228a82" data-id="6228a82" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-2d0f864 elementor-widget elementor-widget-text-editor" data-id="2d0f864" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('experiences') }}">Experiences</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('stories') }}">Stories</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('comingsoon') }}">Sponsors</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('comingsoon') }}">FAQ</a></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-d5b7bf4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d5b7bf4" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2b356fb" data-id="2b356fb" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-0c0466d elementor-widget elementor-widget-text-editor" data-id="0c0466d" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
              <p>© ONE DREAM PROPERTY</p>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6b635e4" data-id="6b635e4" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-3868f04 elementor-widget elementor-widget-text-editor" data-id="3868f04" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
              <p><a href="https://www.staging.2vr360.online/filesff/SFFPrivacyPolicy.pdf" download rel="noopener noreferrer" target="_blank" style="color:white;">Privacy Policy</a> | <a href="https://www.staging.2vr360.online/filesff/SFFTermsofService.pdf" download rel="noopener noreferrer" target="_blank"  style="color:white;">Terms of Service</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c449699" data-id="c449699" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-f4e9618 e-grid-align-right e-grid-align-mobile-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="f4e9618" data-element_type="widget" data-widget_type="social-icons.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.6.6 - 08-06-2022 */
                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                  line-height: 1;
                  font-size: 0;
                }

                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                  display: inline-grid;
                }

                .elementor-widget-social-icons .elementor-grid {
                  grid-column-gap: var(--grid-column-gap, 5px);
                  grid-row-gap: var(--grid-row-gap, 5px);
                  grid-template-columns: var(--grid-template-columns);
                  -webkit-box-pack: var(--justify-content, center);
                  -ms-flex-pack: var(--justify-content, center);
                  justify-content: var(--justify-content, center);
                  justify-items: var(--justify-content, center);
                }

                .elementor-icon.elementor-social-icon {
                  font-size: var(--icon-size, 25px);
                  line-height: var(--icon-size, 25px);
                  width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                  height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                }

                .elementor-social-icon {
                  --e-social-icon-icon-color: #fff;
                  display: -webkit-inline-box;
                  display: -ms-inline-flexbox;
                  display: inline-flex;
                  background-color: #818a91;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -webkit-box-pack: center;
                  -ms-flex-pack: center;
                  justify-content: center;
                  text-align: center;
                  cursor: pointer;
                }

                .elementor-social-icon i {
                  color: var(--e-social-icon-icon-color);
                }

                .elementor-social-icon svg {
                  fill: var(--e-social-icon-icon-color);
                }

                .elementor-social-icon:last-child {
                  margin: 0;
                }

                .elementor-social-icon:hover {
                  opacity: 0.9;
                  color: #fff;
                }

                .elementor-social-icon-android {
                  background-color: #a4c639;
                }

                .elementor-social-icon-apple {
                  background-color: #999;
                }

                .elementor-social-icon-behance {
                  background-color: #1769ff;
                }

                .elementor-social-icon-bitbucket {
                  background-color: #205081;
                }

                .elementor-social-icon-codepen {
                  background-color: #000;
                }

                .elementor-social-icon-delicious {
                  background-color: #39f;
                }

                .elementor-social-icon-deviantart {
                  background-color: #05cc47;
                }

                .elementor-social-icon-digg {
                  background-color: #005be2;
                }

                .elementor-social-icon-dribbble {
                  background-color: #ea4c89;
                }

                .elementor-social-icon-elementor {
                  background-color: #d30c5c;
                }

                .elementor-social-icon-envelope {
                  background-color: #ea4335;
                }

                .elementor-social-icon-facebook,
                .elementor-social-icon-facebook-f {
                  background-color: #3b5998;
                }

                .elementor-social-icon-flickr {
                  background-color: #0063dc;
                }

                .elementor-social-icon-foursquare {
                  background-color: #2d5be3;
                }

                .elementor-social-icon-free-code-camp,
                .elementor-social-icon-freecodecamp {
                  background-color: #006400;
                }

                .elementor-social-icon-github {
                  background-color: #333;
                }

                .elementor-social-icon-gitlab {
                  background-color: #e24329;
                }

                .elementor-social-icon-globe {
                  background-color: #818a91;
                }

                .elementor-social-icon-google-plus,
                .elementor-social-icon-google-plus-g {
                  background-color: #dd4b39;
                }

                .elementor-social-icon-houzz {
                  background-color: #7ac142;
                }

                .elementor-social-icon-instagram {
                  background-color: #262626;
                }

                .elementor-social-icon-jsfiddle {
                  background-color: #487aa2;
                }

                .elementor-social-icon-link {
                  background-color: #818a91;
                }

                .elementor-social-icon-linkedin,
                .elementor-social-icon-linkedin-in {
                  background-color: #0077b5;
                }

                .elementor-social-icon-medium {
                  background-color: #00ab6b;
                }

                .elementor-social-icon-meetup {
                  background-color: #ec1c40;
                }

                .elementor-social-icon-mixcloud {
                  background-color: #273a4b;
                }

                .elementor-social-icon-odnoklassniki {
                  background-color: #f4731c;
                }

                .elementor-social-icon-pinterest {
                  background-color: #bd081c;
                }

                .elementor-social-icon-product-hunt {
                  background-color: #da552f;
                }

                .elementor-social-icon-reddit {
                  background-color: #ff4500;
                }

                .elementor-social-icon-rss {
                  background-color: #f26522;
                }

                .elementor-social-icon-shopping-cart {
                  background-color: #4caf50;
                }

                .elementor-social-icon-skype {
                  background-color: #00aff0;
                }

                .elementor-social-icon-slideshare {
                  background-color: #0077b5;
                }

                .elementor-social-icon-snapchat {
                  background-color: #fffc00;
                }

                .elementor-social-icon-soundcloud {
                  background-color: #f80;
                }

                .elementor-social-icon-spotify {
                  background-color: #2ebd59;
                }

                .elementor-social-icon-stack-overflow {
                  background-color: #fe7a15;
                }

                .elementor-social-icon-steam {
                  background-color: #00adee;
                }

                .elementor-social-icon-stumbleupon {
                  background-color: #eb4924;
                }

                .elementor-social-icon-telegram {
                  background-color: #2ca5e0;
                }

                .elementor-social-icon-thumb-tack {
                  background-color: #1aa1d8;
                }

                .elementor-social-icon-tripadvisor {
                  background-color: #589442;
                }

                .elementor-social-icon-tumblr {
                  background-color: #35465c;
                }

                .elementor-social-icon-twitch {
                  background-color: #6441a5;
                }

                .elementor-social-icon-twitter {
                  background-color: #1da1f2;
                }

                .elementor-social-icon-viber {
                  background-color: #665cac;
                }

                .elementor-social-icon-vimeo {
                  background-color: #1ab7ea;
                }

                .elementor-social-icon-vk {
                  background-color: #45668e;
                }

                .elementor-social-icon-weibo {
                  background-color: #dd2430;
                }

                .elementor-social-icon-weixin {
                  background-color: #31a918;
                }

                .elementor-social-icon-whatsapp {
                  background-color: #25d366;
                }

                .elementor-social-icon-wordpress {
                  background-color: #21759b;
                }

                .elementor-social-icon-xing {
                  background-color: #026466;
                }

                .elementor-social-icon-yelp {
                  background-color: #af0606;
                }

                .elementor-social-icon-youtube {
                  background-color: #cd201f;
                }

                .elementor-social-icon-500px {
                  background-color: #0099e5;
                }

                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                  border-radius: 10%;
                }

                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                  border-radius: 50%;
                }
              </style>
              <div class="elementor-social-icons-wrapper elementor-grid">
                <span class="elementor-grid-item">
                  <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-0a6f84e" target="_blank">
                    <span class="elementor-screen-only">Facebook</span>
                    <i class="fab fa-facebook"></i>
                  </a>
                </span>
                <span class="elementor-grid-item">
                  <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-84cf6f6" target="_blank">
                    <span class="elementor-screen-only">Linkedin</span>
                    <i class="fab fa-linkedin"></i>
                  </a>
                </span>
                <span class="elementor-grid-item">
                  <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-26bf7db" target="_blank">
                    <span class="elementor-screen-only">Twitter</span>
                    <i class="fab fa-twitter"></i>
                  </a>
                </span>
                <span class="elementor-grid-item">
                  <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-c22019e" target="_blank">
                    <span class="elementor-screen-only">Instagram</span>
                    <i class="fab fa-instagram"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div> -->

<div class="modal fade" id="successNewsletter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content" style="
                    background-color: #ffd2dc;
                    padding-left: 49px;
                    padding-right: 49px;
                    padding-top: 30px;
                    padding-bottom: 30px;
                    ">

      <div class="modal-body">
        <div>
          <div class="d-flex justify-content-center mb-4">
            <img class="rounded mx-auto d-block" src="{{ asset('website/images/SFF-Logo22-black.png') }}" style="max-width: 30%; height: auto" />
          </div>
          <div class="d-flex justify-content-center">
            <h4 class="modal-title" style="
                        color: #4C269F;
                        font-weight: 400;
                        font-size: 3.5em;
                        font-family: 'Neue';
                        ">
              <b>SUCCESS</b>
            </h4>
          </div>
          <div class="d-flex justify-content-center align-items-center mx-auto">
            <img class="tick" style="

    position: relative;
    right: 7px;
" src="{{ asset('website/images/tick.png') }}" alt="tick" width="5%" height="5%">
            <h5 style="
            font-size: 1.15em;
            padding-top: 6px;
            font-weight: 400px;
            font-family: 'Fjalla One';
            text-transform: uppercase;
            ">
              Get ready to live and breathe food, like really really good food</h5>
          </div>
          <!-- <p class="d-flex justify-content-center py-4">
                 Get ready to live and breathe food, like really really good
                food.&nbsp;
            </p> -->
          <div class="d-flex justify-content-center">
            <button class="close btn btn-lg btn-primary d-flex justify-content-center" data-dismiss="modal" type="button" style="
                        background-color: #6E3CE1;
                        margin-top:20px;
                        padding-left: 50px;
                        padding-right: 50px;
                        font-family: 'Fjalla One';
                        border: none;
                        " onclick="resetModalTekan()">
              BACK TO HOME
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>



<div data-elementor-type="footer" data-elementor-id="402" class="elementor elementor-402 elementor-location-footer">
  <section class="elementor-section elementor-top-section elementor-element elementor-element-293d180 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="293d180" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-962a7f9" data-id="962a7f9" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <section class="elementor-section elementor-inner-section elementor-element elementor-element-cfb9751 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cfb9751" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-a7c7f74" data-id="a7c7f74" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-a42ac81 elementor-widget elementor-widget-heading" data-id="a42ac81" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                      <h2 class="elementor-heading-title elementor-size-default">
                        to subscribe
                      </h2>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-2cbafd1 elementor-widget elementor-widget-text-editor" data-id="2cbafd1" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p style="
    font-family: 'Roboto';
">
                        Be a real foodie and subscribe to get the most out
                        of Singapore Food Festival 2022!
                      </p>
                    </div>
                  </div>
                  <div class="elementor-element elementor-element-13f657e elementor-button-align-start elementor-mobile-button-align-center elementor-widget elementor-widget-form" data-id="13f657e" data-element_type="widget" data-settings='{"step_next_label":"Next","step_previous_label":"Previous","button_width":"100","step_type":"number_text","step_icon_shape":"circle"}' data-widget_type="form.default">
                    <div class="elementor-widget-container">
                      <style>
                        /*! elementor-pro - v3.7.2 - 15-06-2022 */
                        .elementor-button.elementor-hidden,
                        .elementor-hidden {
                          display: none;
                        }

                        .e-form__step {
                          width: 100%;
                        }

                        .e-form__step:not(.elementor-hidden) {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -ms-flex-wrap: wrap;
                          flex-wrap: wrap;
                        }

                        .e-form__buttons {
                          -ms-flex-wrap: wrap;
                          flex-wrap: wrap;
                        }

                        .e-form__buttons,
                        .e-form__buttons__wrapper {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                        }

                        .e-form__indicators {
                          -webkit-box-pack: justify;
                          -ms-flex-pack: justify;
                          justify-content: space-between;
                          -ms-flex-wrap: nowrap;
                          flex-wrap: nowrap;
                          font-size: 13px;
                          margin-bottom: var(--e-form-steps-indicators-spacing);
                        }

                        .e-form__indicators,
                        .e-form__indicators__indicator {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                        }

                        .e-form__indicators__indicator {
                          -webkit-box-orient: vertical;
                          -webkit-box-direction: normal;
                          -ms-flex-direction: column;
                          flex-direction: column;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -ms-flex-preferred-size: 0;
                          flex-basis: 0;
                          padding: 0 var(--e-form-steps-divider-gap);
                        }

                        .e-form__indicators__indicator__progress {
                          width: 100%;
                          position: relative;
                          background-color: var(--e-form-steps-indicator-progress-background-color);
                          border-radius: var(--e-form-steps-indicator-progress-border-radius);
                          overflow: hidden;
                        }

                        .e-form__indicators__indicator__progress__meter {
                          width: var(--e-form-steps-indicator-progress-meter-width,
                              0);
                          height: var(--e-form-steps-indicator-progress-height);
                          line-height: var(--e-form-steps-indicator-progress-height);
                          padding-right: 15px;
                          border-radius: var(--e-form-steps-indicator-progress-border-radius);
                          background-color: var(--e-form-steps-indicator-progress-color);
                          color: var(--e-form-steps-indicator-progress-meter-color);
                          text-align: right;
                          -webkit-transition: width 0.1s linear;
                          -o-transition: width 0.1s linear;
                          transition: width 0.1s linear;
                        }

                        .e-form__indicators__indicator:first-child {
                          padding-left: 0;
                        }

                        .e-form__indicators__indicator:last-child {
                          padding-right: 0;
                        }

                        .e-form__indicators__indicator--state-inactive {
                          color: var(--e-form-steps-indicator-inactive-primary-color,
                              #c2cbd2);
                        }

                        .e-form__indicators__indicator--state-inactive [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                          background-color: var(--e-form-steps-indicator-inactive-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-inactive object,
                        .e-form__indicators__indicator--state-inactive svg {
                          fill: var(--e-form-steps-indicator-inactive-primary-color,
                              #c2cbd2);
                        }

                        .e-form__indicators__indicator--state-active {
                          color: var(--e-form-steps-indicator-active-primary-color,
                              #39b54a);
                          border-color: var(--e-form-steps-indicator-active-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-active [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                          background-color: var(--e-form-steps-indicator-active-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-active object,
                        .e-form__indicators__indicator--state-active svg {
                          fill: var(--e-form-steps-indicator-active-primary-color,
                              #39b54a);
                        }

                        .e-form__indicators__indicator--state-completed {
                          color: var(--e-form-steps-indicator-completed-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator--state-completed [class*="indicator--shape-"]:not(.e-form__indicators__indicator--shape-none) {
                          background-color: var(--e-form-steps-indicator-completed-primary-color,
                              #39b54a);
                        }

                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                          color: var(--e-form-steps-indicator-completed-primary-color,
                              #39b54a);
                        }

                        .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                          color: var(--e-form-steps-indicator-completed-primary-color,
                              #39b54a);
                          background-color: initial;
                        }

                        .e-form__indicators__indicator--state-completed object,
                        .e-form__indicators__indicator--state-completed svg {
                          fill: var(--e-form-steps-indicator-completed-secondary-color,
                              #fff);
                        }

                        .e-form__indicators__indicator__icon {
                          width: var(--e-form-steps-indicator-padding,
                              30px);
                          height: var(--e-form-steps-indicator-padding,
                              30px);
                          font-size: var(--e-form-steps-indicator-icon-size);
                          border-width: 1px;
                          border-style: solid;
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                          overflow: hidden;
                          margin-bottom: 10px;
                        }

                        .e-form__indicators__indicator__icon img,
                        .e-form__indicators__indicator__icon object,
                        .e-form__indicators__indicator__icon svg {
                          width: var(--e-form-steps-indicator-icon-size);
                          height: auto;
                        }

                        .e-form__indicators__indicator__icon .e-font-icon-svg {
                          height: 1em;
                        }

                        .e-form__indicators__indicator__number {
                          width: var(--e-form-steps-indicator-padding,
                              30px);
                          height: var(--e-form-steps-indicator-padding,
                              30px);
                          border-width: 1px;
                          border-style: solid;
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                          margin-bottom: 10px;
                        }

                        .e-form__indicators__indicator--shape-circle {
                          border-radius: 50%;
                        }

                        .e-form__indicators__indicator--shape-square {
                          border-radius: 0;
                        }

                        .e-form__indicators__indicator--shape-rounded {
                          border-radius: 5px;
                        }

                        .e-form__indicators__indicator--shape-none {
                          border: 0;
                        }

                        .e-form__indicators__indicator__label {
                          text-align: center;
                        }

                        .e-form__indicators__indicator__separator {
                          width: 100%;
                          height: var(--e-form-steps-divider-width);
                          background-color: #c2cbd2;
                        }

                        .e-form__indicators--type-icon,
                        .e-form__indicators--type-icon_text,
                        .e-form__indicators--type-number,
                        .e-form__indicators--type-number_text {
                          -webkit-box-align: start;
                          -ms-flex-align: start;
                          align-items: flex-start;
                        }

                        .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
                        .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
                        .e-form__indicators--type-number .e-form__indicators__indicator__separator,
                        .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                          margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2);
                        }

                        .elementor-field-type-hidden {
                          display: none;
                        }

                        .elementor-field-type-html {
                          display: inline-block;
                        }

                        .elementor-login .elementor-lost-password,
                        .elementor-login .elementor-remember-me {
                          font-size: 0.85em;
                        }

                        .elementor-field-type-recaptcha_v3 .elementor-field-label {
                          display: none;
                        }

                        .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                          z-index: 1;
                        }

                        .elementor-button .elementor-form-spinner {
                          -webkit-box-ordinal-group: 4;
                          -ms-flex-order: 3;
                          order: 3;
                        }

                        .elementor-form .elementor-button>span {
                          display: -webkit-box;
                          display: -ms-flexbox;
                          display: flex;
                          -webkit-box-pack: center;
                          -ms-flex-pack: center;
                          justify-content: center;
                          -webkit-box-align: center;
                          -ms-flex-align: center;
                          align-items: center;
                        }

                        .elementor-form .elementor-button .elementor-button-text {
                          white-space: normal;
                          -webkit-box-flex: 0;
                          -ms-flex-positive: 0;
                          flex-grow: 0;
                        }

                        .elementor-form .elementor-button svg {
                          height: auto;
                        }

                        .elementor-form .elementor-button .e-font-icon-svg {
                          height: 1em;
                        }
                      </style>
                      <form action="javascript:void(0)" class="elementor-form" method="post" name="New Form">
                        <input type="hidden" name="post_id" value="402" />
                        <input type="hidden" name="form_id" value="13f657e" />
                        <input type="hidden" name="referer_title" value="" />

                        <input type="hidden" name="queried_id" value="1913" />

                        <div class="elementor-form-fields-wrapper elementor-labels-">
                          <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                            <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                              Email
                            </label>
                            <input style="
    font-family: 'Roboto';
" size="1" type="email" name="newsletter_email" id="newsletter_email" class="elementor-field elementor-size-xs elementor-field-textual" placeholder="Email Address" required="required" aria-required="true" />
                          </div>
                          <div class="elementor-field-type-checkbox elementor-field-group elementor-column elementor-field-group-field_3a405a0 elementor-col-100">
                            <label for="form-field-field_3a405a0" class="elementor-field-label elementor-screen-only">
                            </label>
                            <div class="elementor-field-subgroup">
                              <span style="
    display: flex;
    align-items: baseline;
" class="elementor-field-option"><input type="checkbox" name="checkbox_newsletter" value="Yes, I consent to receiving emails related to Singapore Food Festival 2022." id="checkbox_newsletter" name="form_fields[field_3a405a0]" checked />
                                <label style="
    font-family: 'Roboto';
    position: relative;
    left: 3%;
" for="form-field-field_3a405a0-0">Yes, I consent to
                                  receiving emails
                                  related to Singapore Food Festival
                                  2022.</label></span>
                              <div class=" p-2 w-2" id="error_newsletter" style="display: none; color:#ff0000; font-weight:bold">

                              </div>
                              <div class="p-2" id="error_email_newsletter" style="display: none; color:#ff0000; font-weight:bold">
                              </div>
                            </div>
                          </div>
                          <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                            <button type="submit" id="btn-save-newsletter" class="elementor-button elementor-size-xs">
                              <span>
                                <span class="elementor-align-icon-right elementor-button-icon">
                                  <i aria-hidden="true" class="fas fa-arrow-right"></i>
                                </span>
                                <span class="elementor-button-text">SUBSCRIBE</span>
                              </span>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cdfdd52" data-id="cdfdd52" data-element_type="column">
                <div class="elementor-widget-wrap"></div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4917198" data-id="4917198" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-1b02567 elementor-widget elementor-widget-text-editor" data-id="1b02567" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('/') }}">Home</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('virtualmasterclass') }}">Virtual
                            Masterclasses</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('enter-virtualmarketplace') }}">Virtual
                            Marketplace</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('festivalvillage') }}">Festival
                            Village</a></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6228a82" data-id="6228a82" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-2d0f864 elementor-widget elementor-widget-text-editor" data-id="2d0f864" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('experiences') }}">Experiences</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('stories') }}">Stories</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('sponsor') }}">Organisers and Partners</a></span>
                      </p>
                      <p>
                        <span style="color: #ffffff"><a style="color: #ffffff" href="{{ url('faq') }}">FAQ</a></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
  <section class="elementor-section elementor-top-section elementor-element elementor-element-d5b7bf4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d5b7bf4" data-element_type="section" data-settings='{"background_background":"classic"}'>
    <div class="elementor-container elementor-column-gap-default">
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2b356fb" data-id="2b356fb" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-0c0466d elementor-widget elementor-widget-text-editor" data-id="0c0466d" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
              <p style="
    font-family: 'Roboto';
">© ONE DREAM PROPERTY</p>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6b635e4" data-id="6b635e4" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-3868f04 elementor-widget elementor-widget-text-editor" data-id="3868f04" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
              <p>
                <a style="color: white; font-family: 'Roboto'; " href="{{ asset('website/pdf/SFF Privacy Policy.pdf') }}" download="sff_privacypolicy.pdf"> Privacy Policy </a> | <a style="color: white; font-family: 'Roboto';" href=" {{ asset('website/pdf/SFF Terms of Service.pdf') }}" download="sff_termofservice.pdf">Terms of Service</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c449699" data-id="c449699" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
          <div class="elementor-element elementor-element-f4e9618 e-grid-align-right e-grid-align-mobile-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="f4e9618" data-element_type="widget" data-widget_type="social-icons.default">
            <div class="elementor-widget-container">
              <style>
                /*! elementor - v3.6.6 - 08-06-2022 */
                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                  line-height: 1;
                  font-size: 0;
                }

                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                  display: inline-grid;
                }

                .elementor-widget-social-icons .elementor-grid {
                  grid-column-gap: var(--grid-column-gap, 5px);
                  grid-row-gap: var(--grid-row-gap, 5px);
                  grid-template-columns: var(--grid-template-columns);
                  -webkit-box-pack: var(--justify-content, center);
                  -ms-flex-pack: var(--justify-content, center);
                  justify-content: var(--justify-content, center);
                  justify-items: var(--justify-content, center);
                }

                .elementor-icon.elementor-social-icon {
                  font-size: var(--icon-size, 25px);
                  line-height: var(--icon-size, 25px);
                  width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                  height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, 0.5em)));
                }

                .elementor-social-icon {
                  --e-social-icon-icon-color: #fff;
                  display: -webkit-inline-box;
                  display: -ms-inline-flexbox;
                  display: inline-flex;
                  background-color: #818a91;
                  -webkit-box-align: center;
                  -ms-flex-align: center;
                  align-items: center;
                  -webkit-box-pack: center;
                  -ms-flex-pack: center;
                  justify-content: center;
                  text-align: center;
                  cursor: pointer;
                }

                .elementor-social-icon i {
                  color: var(--e-social-icon-icon-color);
                }

                .elementor-social-icon svg {
                  fill: var(--e-social-icon-icon-color);
                }

                .elementor-social-icon:last-child {
                  margin: 0;
                }

                .elementor-social-icon:hover {
                  opacity: 0.9;
                  color: #fff;
                }

                .elementor-social-icon-android {
                  background-color: #a4c639;
                }

                .elementor-social-icon-apple {
                  background-color: #999;
                }

                .elementor-social-icon-behance {
                  background-color: #1769ff;
                }

                .elementor-social-icon-bitbucket {
                  background-color: #205081;
                }

                .elementor-social-icon-codepen {
                  background-color: #000;
                }

                .elementor-social-icon-delicious {
                  background-color: #39f;
                }

                .elementor-social-icon-deviantart {
                  background-color: #05cc47;
                }

                .elementor-social-icon-digg {
                  background-color: #005be2;
                }

                .elementor-social-icon-dribbble {
                  background-color: #ea4c89;
                }

                .elementor-social-icon-elementor {
                  background-color: #d30c5c;
                }

                .elementor-social-icon-envelope {
                  background-color: #ea4335;
                }

                .elementor-social-icon-facebook,
                .elementor-social-icon-facebook-f {
                  background-color: #3b5998;
                }

                .elementor-social-icon-flickr {
                  background-color: #0063dc;
                }

                .elementor-social-icon-foursquare {
                  background-color: #2d5be3;
                }

                .elementor-social-icon-free-code-camp,
                .elementor-social-icon-freecodecamp {
                  background-color: #006400;
                }

                .elementor-social-icon-github {
                  background-color: #333;
                }

                .elementor-social-icon-gitlab {
                  background-color: #e24329;
                }

                .elementor-social-icon-globe {
                  background-color: #818a91;
                }

                .elementor-social-icon-google-plus,
                .elementor-social-icon-google-plus-g {
                  background-color: #dd4b39;
                }

                .elementor-social-icon-houzz {
                  background-color: #7ac142;
                }

                .elementor-social-icon-instagram {
                  background-color: #262626;
                }

                .elementor-social-icon-jsfiddle {
                  background-color: #487aa2;
                }

                .elementor-social-icon-link {
                  background-color: #818a91;
                }

                .elementor-social-icon-linkedin,
                .elementor-social-icon-linkedin-in {
                  background-color: #0077b5;
                }

                .elementor-social-icon-medium {
                  background-color: #00ab6b;
                }

                .elementor-social-icon-meetup {
                  background-color: #ec1c40;
                }

                .elementor-social-icon-mixcloud {
                  background-color: #273a4b;
                }

                .elementor-social-icon-odnoklassniki {
                  background-color: #f4731c;
                }

                .elementor-social-icon-pinterest {
                  background-color: #bd081c;
                }

                .elementor-social-icon-product-hunt {
                  background-color: #da552f;
                }

                .elementor-social-icon-reddit {
                  background-color: #ff4500;
                }

                .elementor-social-icon-rss {
                  background-color: #f26522;
                }

                .elementor-social-icon-shopping-cart {
                  background-color: #4caf50;
                }

                .elementor-social-icon-skype {
                  background-color: #00aff0;
                }

                .elementor-social-icon-slideshare {
                  background-color: #0077b5;
                }

                .elementor-social-icon-snapchat {
                  background-color: #fffc00;
                }

                .elementor-social-icon-soundcloud {
                  background-color: #f80;
                }

                .elementor-social-icon-spotify {
                  background-color: #2ebd59;
                }

                .elementor-social-icon-stack-overflow {
                  background-color: #fe7a15;
                }

                .elementor-social-icon-steam {
                  background-color: #00adee;
                }

                .elementor-social-icon-stumbleupon {
                  background-color: #eb4924;
                }

                .elementor-social-icon-telegram {
                  background-color: #2ca5e0;
                }

                .elementor-social-icon-thumb-tack {
                  background-color: #1aa1d8;
                }

                .elementor-social-icon-tripadvisor {
                  background-color: #589442;
                }

                .elementor-social-icon-tumblr {
                  background-color: #35465c;
                }

                .elementor-social-icon-twitch {
                  background-color: #6441a5;
                }

                .elementor-social-icon-twitter {
                  background-color: #1da1f2;
                }

                .elementor-social-icon-viber {
                  background-color: #665cac;
                }

                .elementor-social-icon-vimeo {
                  background-color: #1ab7ea;
                }

                .elementor-social-icon-vk {
                  background-color: #45668e;
                }

                .elementor-social-icon-weibo {
                  background-color: #dd2430;
                }

                .elementor-social-icon-weixin {
                  background-color: #31a918;
                }

                .elementor-social-icon-whatsapp {
                  background-color: #25d366;
                }

                .elementor-social-icon-wordpress {
                  background-color: #21759b;
                }

                .elementor-social-icon-xing {
                  background-color: #026466;
                }

                .elementor-social-icon-yelp {
                  background-color: #af0606;
                }

                .elementor-social-icon-youtube {
                  background-color: #cd201f;
                }

                .elementor-social-icon-500px {
                  background-color: #0099e5;
                }

                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                  border-radius: 10%;
                }

                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                  border-radius: 50%;
                }
              </style>
              <div class="elementor-social-icons-wrapper elementor-grid" style="margin-top:5px;">
                <span class="elementor-grid-item">
                  <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-0a6f84e" target="_blank" href="https://www.facebook.com/SingaporeFoodFestival2022/">
                    <span class="elementor-screen-only">Facebook</span>
                    <i class="fab fa-facebook"></i>
                  </a>
                </span>
                <span class="elementor-grid-item">
                  <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-c22019e" target="_blank" href="https://instagram.com/singaporefoodfestival">
                    <span class="elementor-screen-only">Instagram</span>
                    <i class="fab fa-instagram"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
  function resetModalTekan() {
    $('#successNewsletter').modal('hide');
  }
</script>

<script>
  $(document).ready(function() {
    $('body').on('click', '#btn-save-newsletter', function(event) {
      //check atleat 1 checkbox is checked
      var err_email = document.querySelector('#error_email_newsletter')
      const note = document.querySelector('#error_newsletter');
      if (!$('#checkbox_newsletter').is(':checked')) {
        note.style.display = 'block';
        err_email.style.display = 'none';
        note.innerText = "Please check this box if you want to proceed!";
      } else {

        // var email = $("#newsletter_email").val();
        var email = $('input[name=newsletter_email]').val();

        console.log(email);

        var token = "{{ csrf_token() }}";
        var formData = new FormData();
        formData.append('_token', token)
        formData.append('email', email)
        $("#btn-save-newsletter").html('subscribed');
        $("#btn-save-newsletter").attr("disabled", true);
        $("#btn-save-newsletter").attr('style', 'border-color:#ff6600');
        $("#btn-save-newsletter").attr('style', 'color:#ff6600');
        $("#btn-save-newsletter").attr("btn-success", true);


        // TODO - Ajax validation
        if ($('#email').val() == '') {
          console.log('here');
        }
        $.ajax({
          type: "POST",
          url: "{{ route('newsletter') }}",
          data: formData,
          dataType: 'json',
          processData: false,
          contentType: false,
          success: function(res) {
            console.log(res);
            setTimeout(function() {
              window.location.reload();
            }, 500);
            $('#successNewsletter').modal('show');
            $("#btn-save-newsletter").html('SUBSCRIBE');
            $("#btn-save-newsletter").attr("disabled", false);
            $("#btn-save-newsletter").attr("btn-primary", true);

            err_email.style.display = 'none';
          },
          error: function(errors) {
            $("#btn-save-newsletter").html('SUBSCRIBE');
            $("#btn-save-newsletter").attr("disabled", false);
            $("#btn-save-newsletter").attr("btn-primary", true);
            $("#btn-save-newsletter").attr("btn-success", false);

            console.log(errors)
            if (errors.status == 200) {
              err_email.style.display = 'none';
              $('#successNewsletter').modal('show');
              $("#btn-save-newsletter").html('SUBSCRIBED');
              $("#btn-save-newsletter").attr("disabled", true);
              $("#btn-save-newsletter").attr('style', 'border-color:#ff6600');
              $("#btn-save-newsletter").attr('style', 'color:#ff6600');
              $("#btn-save-newsletter").attr("btn-success", true);
              err_email.style.display = 'none';
              note.style.display = 'none';
            } else {
              note.style.display = 'none';
              err_email.style.display = 'block';
              err_email.innerText = "The email must be a valid email address";
            }


          }
        });
      }
    })

  });
</script>
