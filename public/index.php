<?php
require_once 'components/head.php';
?>

    <div class="flex">
        <!-- Sidebar -->
        <?php
        require_once 'components/sidebar.html';
        ?>


        <!-- Main Content -->
        <main class="flex-1 min-w-0 lg:ml-80">
            <div class="max-w-4xl mx-auto p-6 lg:p-8">
                <!-- Breadcrumb -->
                <div class="flex items-center gap-2 text-sm text-muted-foreground mb-8">
                    <span>API Reference</span>
                    <i class="fas fa-comment-alt text-accent text-sm"></i>

                    <span class="text-foreground font-medium">Overview</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Overview</h1>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        This document gives a description of the RESTful web services exposed on the Creditswitch
                        Platform which enables business partners sell different products and track their account. Our
                        RESTful web service mainly uses data in JSON format for both input and output operations.
                    </p>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        Http request header should be set to application/json or the corresponding data type. For
                        technical assistance with the CSW API contact us at support@creditswitch.com. The subject line
                        should be CSW API:(ISSUE SNIPPET) to enable swift response and support.
                    </p>

                </div>

                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h3 class="text-xl font-bold text-balance">Integration Flow</h3>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        This section contains a description of recommended integration flow which helps minimize the
                        risk of disputing transactions and also increase customer confidence in the system.
                    </p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step One</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        If the service has a method for validating the customer, that method should be used first in
                        order to make sure the customer is properly identified on provider platform and that products
                        customer wishes to purchase are available at the moment.</p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step Two</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">In case step 1 is successfully
                        completed, a Vend request can be sent. If the HTTP status of the response is OK, then you can
                        check the request status through status field which can be Successful or not. In either case,
                        the request has been processed</p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step Three</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-1">Possible alternative scenarios to an
                        ideal step 2 include a Response timeout or a Connection error or any other error defined in our
                        response</p>
                    <ul class="ml-8 space-y-1 list-disc text-lg text-muted-foreground leading-relaxed">
                        <li>In case of an error, you can safely resend the vend request - however, the request id must
                            be updated.
                        </li>
                        <li>If a response with HTTP status OK is received, you can consider vend to have been carried
                            out.
                        </li>
                    </ul>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step Four</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">If the service has a method for
                        validating the customer, that method should be used first in order to make sure the customer is
                        properly identified on provider platform and that products customer wishes to purchase are
                        available at the moment.</p>
                </div>


            </div>
        </main>
    </div>

<?php
require_once "components/footer.php";
?>