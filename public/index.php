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
                        <h3 class="text-xl font-bold text-balance">🔗 Integration Flow</h3>
                    </div>

                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        This section describes the recommended integration flow 💡 — helping reduce the risk of disputed transactions and boosting customer confidence. ✅
                    </p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">🛠️ Step One</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        If your service supports customer validation, it should be performed first. This ensures the customer is correctly identified on the provider platform and that the desired products are currently available.
                    </p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">🚀 Step Two</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        Once Step 1 is completed successfully, send a Vend request. If the HTTP response status is <code>OK</code>, check the <code>status</code> field — it will indicate whether the request was successful. Either way, the request has been processed. 📦
                    </p>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">⚠️ Step Three</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-1">
                        Alternative outcomes in Step 2 include timeouts, connection issues, or other defined errors. 🔄 Handle these gracefully:
                    </p>
                    <ul class="ml-8 space-y-1 list-disc text-lg text-muted-foreground leading-relaxed">
                        <li>If an error occurs, you can safely resend the Vend request — just be sure to generate a new request ID. 🔁</li>
                        <li>If a new response with HTTP status <code>OK</code> is received, you may consider the vend process completed. ✅</li>
                    </ul>

                    <h4 class="text-xl uppercase text-balance leading-relaxed mb-2 mt-7">🔍 Step Four</h4>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        (Optional) Re-validate the customer if needed. This ensures continued consistency in user identity and availability of desired products at this final step. 🧾
                    </p>
                </div>


            </div>
        </main>
    </div>

<?php
require_once "components/footer.php";
?>