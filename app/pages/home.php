<?php

require_once __DIR__.'/../../config/config.php';
$file_name = pathinfo(basename(__FILE__), PATHINFO_FILENAME);

$content = <<<EOT

<!--AUTHOR-->
<section class="uk-section uk-section-muted uk-padding-remove-bottom">
    <div class="uk-container uk-container-small">
        <header class="uk-text-center">
            <h1 class="uk-heading-primary">Price</h1>
            <p class="uk-width-3-5 uk-margin-auto">
                Our Product is the easiest way for teams to track their works progress. Our advance plans give you more tools to get the job done.
            </p>
        </header>
        <div class="uk-grid uk-grid-small uk-child-width-1-3@m uk-margin-medium-top uk-grid-match" data-uk-scrollspy="cls: uk-animation-slide-bottom-small; target: > div > .uk-card; delay: 200" data-uk-grid>
            
            <!-- price -->
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-flex uk-flex-column" data-uk-scrollspy-class="uk-animation-slide-left-small">
                    <div class="uk-card-header uk-text-center">
                        <h4 class="uk-text-bold">PERSONAL</h4>
                    </div>
                    <div class="uk-card-body uk-flex-1">
                        <div class="uk-flex uk-flex-middle uk-flex-center">
                            <span style="font-size: 4rem; font-weight: 200; line-height: 1em">
                                <span style="font-size: 0.5em">$</span>9<small>.99</small>
                            </span>
                        </div>
                        <div class="uk-text-small uk-text-center uk-text-muted">Per member billed annually</div>
                        <ul>
                            <li>2 users included</li>
                            <li>1 GB of storage</li>
                            <li>A beer jar</li>
                            
                        </ul>
                    </div>
                    <div class="uk-card-footer">
                        <a href="#" class="uk-button uk-button-primary uk-width-1-1">BUY NOW</a>
                    </div>
                </div>
            </div>
            <!-- /price -->
            
            <!-- price -->
            <div>
                <div class="uk-card uk-card-default uk-card-hover uk-flex uk-flex-column">
                    <div class="uk-card-header uk-text-center">
                        <h4 class="uk-text-bold">PROFESSIONAL</h4>
                    </div>
                    <div class="uk-card-body uk-flex-1">
                        <div class="uk-flex uk-flex-middle uk-flex-center">
                            <span style="font-size: 4rem; font-weight: 200; line-height: 1em">
                                <span style="font-size: 0.5em">$</span>89<small>.99</small>
                            </span>
                        </div>
                        <div class="uk-text-small uk-text-center uk-text-muted">Per member billed annually</div>
                        <ul>
                            <li>10 users included</li>
                            <li>5 GB of storage</li>
                            <li>Email support</li>
                            <li>A beer jar with beer inside!</li>
                        </ul>
                    </div>
                    <div class="uk-card-footer">
                        <a href="" class="uk-button uk-button-primary uk-width-1-1">BUY NOW</a>
                    </div>
                </div>
            </div>
            <!-- /price -->
            <!-- price -->
            <div>
                <div class="uk-card uk-card-default uk-flex uk-card-hover uk-flex-column" data-uk-scrollspy-class="uk-animation-slide-right-small">
                    <div class="uk-card-header uk-text-center">
                        <h4 class="uk-text-bold">CORPORATE</h4>
                    </div>
                    <div class="uk-card-body uk-flex-1">
                        <div class="uk-flex uk-flex-middle uk-flex-center">
                            <span style="font-size: 4rem; font-weight: 200; line-height: 1em">
                                <span style="font-size: 0.5em">$</span>299
                            </span>
                        </div>
                        <div class="uk-text-small uk-text-center uk-text-muted">Per member billed annually</div>
                        <ul>
                            <li>Unlimited users</li>
                            <li>Unlimited storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                    </div>
                    <div class="uk-card-footer">
                        <a href="" class="uk-button uk-button-primary uk-width-1-1">BUY NOW</a>
                    </div>
                </div>
            </div>
            <!-- /price -->
            
        </div>
        <div class="uk-text-center uk-text-small uk-text-muted uk-section uk-section-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
            <a href="#more" title="More about Plans" data-uk-icon="arrow-down" data-uk-scroll="duration: 400" class="uk-button uk-button-secondary uk-margin-medium-top uk-button-large">MORE ABOUT PLANS</a>
        </div>
    </div>
</section>
<section id="more" class="uk-section uk-section-default">
    <div class="uk-container">
        <h3 class="uk-text-bold">More Features</h3>
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-middle uk-table-divider uk-table-large uk-table-justify" data-uk-scrollspy="cls:uk-animation-fade;">
                <thead>
                    <tr>
                        <th>Features</th>
                        <th>Personal</th>
                        <th class="uk-background-muted">Professional</th>
                        <th>Corporate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="uk-width-2-5">Incididunt ut labore</td>
                        <td class="uk-width-1-5"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                        <td class="uk-width-1-5 uk-background-muted"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                        <td class="uk-width-1-5"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                    </tr>
                    <tr>
                        <td class="uk-width-2-5">Incididunt ut labore</td>
                        <td class="uk-width-1-5"><span class="uk-text-danger" data-uk-icon="icon:close; ratio:2.5"></span></td>
                        <td class="uk-width-1-5 uk-background-muted"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                        <td class="uk-width-1-5"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                    </tr>
                    <tr>
                        <td class="uk-width-2-5">Labore et dolore magna aliqua</td>
                        <td class="uk-width-1-5"><span class="uk-text-danger" data-uk-icon="icon:close; ratio:2.5"></span></td>
                        <td class="uk-width-1-5 uk-background-muted"><span class="uk-text-danger" data-uk-icon="icon:close; ratio:2.5"></span></td>
                        <td class="uk-width-1-5"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                    </tr>
                    <tr>
                        <td class="uk-width-2-5">Consectetur adipisicing elit, sed do eiusmod incididunt</td>
                        <td class="uk-width-1-5"><span class="uk-text-danger" data-uk-icon="icon:close; ratio:2.5"></span></td>
                        <td class="uk-width-1-5 uk-background-muted"><span class="uk-text-danger" data-uk-icon="icon:close; ratio:2.5"></span></td>
                        <td class="uk-width-1-5"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                    </tr>
                    <tr>
                        <td class="uk-width-2-5">Labore et dolore magna aliqua</td>
                        <td class="uk-width-1-5"><span class="uk-text-danger" data-uk-icon="icon:close; ratio:2.5"></span></td>
                        <td class="uk-width-1-5 uk-background-muted"><span class="uk-text-danger" data-uk-icon="icon:close; ratio:2.5"></span></td>
                        <td class="uk-width-1-5"><span class="uk-text-success" data-uk-icon="icon:check; ratio:2.5"></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

EOT;

require_once __DIR__.'/../layouts/app.php';
