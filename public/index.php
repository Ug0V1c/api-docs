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

                    <span class="text-foreground dark:text-black font-medium">Overview</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Overview</h1>
                    </div>
                    <div class="mb-8">
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        This document provides an overview of the <strong>RESTful web services 🌐</strong> exposed on the <strong>Creditswitch Platform 💳</strong>.  
                        These services enable business partners to sell products and monitor their accounts with ease.  
                        Data is exchanged in <strong>JSON format 📦</strong> for both input and output operations.
                    </p>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        HTTP request headers should be set to <code>application/json</code> or the appropriate data type.  
                        For technical assistance with the <strong>CSW API 🛠️</strong>, contact us at <a href="mailto:support@creditswitch.com" class="underline">support@creditswitch.com</a>.  
                        Please use the subject line: <strong>CSW API: (ISSUE SNIPPET) ✉️</strong> to ensure a swift response.
                    </p>
                    </div>

                    <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h3 class="text-xl font-bold text-balance">Integration Flow 🔄</h3>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        This section describes the recommended <strong>integration flow 🚀</strong>, designed to reduce the risk of transaction disputes and boost customer confidence in the system.
                    </p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step One 📝</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        If the service includes a <strong>customer validation method 🔍</strong>, it should be executed first.  
                        This ensures the customer is properly identified on the provider’s platform and that the products they wish to purchase are available.
                    </p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step Two ✅</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        Once Step 1 is successful, send a <strong>Vend request 📤</strong>.  
                        If the HTTP status of the response is <code>OK</code>, check the <strong>status field</strong> to confirm whether the request was successful or not.  
                        In either case, the request will have been processed.
                    </p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step Three ⚠️</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-1">
                        Alternative outcomes to Step 2 may include a <strong>Response Timeout ⏱️</strong>, a <strong>Connection Error 🌐</strong>, or other errors defined in our response.
                    </p>
                    <ul class="ml-8 space-y-1 list-disc text-lg text-muted-foreground leading-relaxed">
                        <li>
                        In case of an error, you may safely resend the <strong>Vend request 🔄</strong> — but ensure the <strong>request ID</strong> is updated.
                        </li>
                        <li>
                        If a response with <code>HTTP status OK</code> is received, you may consider the vend to have been successfully completed 🎯.
                        </li>
                    </ul>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">Step Four 🔒</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        If applicable, the <strong>customer validation method 🔍</strong> should be re-used to confirm that the customer remains properly identified and that the desired products are still available on the provider’s platform.
                    </p>
                    </div>

                </div>


            </div>
        </main>
    </div>

<?php
require_once "components/footer.php";
?>