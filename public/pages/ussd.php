<?php
require_once '../components/head.php';
?>

    <div class="flex">
        <!-- Sidebar -->
        <?php
        include '../components/sidebar.html';
        ?>


        <!-- Main Content -->
        <main class="flex-1 min-w-0 lg:ml-80">
            <div class="max-w-4xl mx-auto p-6 lg:p-8">
                <!-- Breadcrumb -->
                <div class="flex items-center gap-2 text-sm text-muted-foreground mb-8">
                    <span>API Reference</span>
                    <i class="fas fa-comment-alt text-accent text-sm"></i>

                    <span class="text-foreground font-medium">USSD</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">USSD Solutions</h1>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        This document gives a description of the USSD web service exposed on the Creditswitch Platform
                        which enables business partners’ display their USSD menu. For technical assistance with the CSW
                        API contact us at techsupport@creditswitch.com to enable swift response and support.
                    </p>

                </div>

                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h3 class="text-2xl font-bold text-balance">Integration</h3>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                        This section contains a description of recommended integration flow which helps minimize the
                        risk of disputing transactions and also increase customer confidence in the system
                    </p>

                    <p class="text-lg text-muted-foreground leading-relaxed">
                        For a secure transfer of data between Creditswitch server and client’s server, a secured
                        connection is required. This can be achieved via a VPN a connection, https or other secured
                        protocols.
                    </p>

                </div>


                <div class="mb-4 mt-16">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">External USSD Application Service</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
GET
                        </span>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        This service allows a client to be able to display their preferred menu via USSD. Creditswitch
                        will append user’s request parameters and push to the provided endpoint. A JSON response is
                        expected for this request.
                    </p>

                </div>


                <!-- Service Information -->
                <div class="bg-card border border-border rounded-lg mb-8">
                    <div class="p-6 border-b border-border">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <i class="fas fa-circle-info text-accent text-xl"></i>

                            Service Information
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">To be provided by the
                                        client
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                    <div class="mt-1 p-3">
                                        <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                                            GET
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Tabs -->
                <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'request' }">
                    <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'request' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='request'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Request Body

                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'sample' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='sample'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Request Body
                        </button>

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'response body' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='response body'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Response Body
                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'response' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='response'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Response
                        </button>
                    </div>

                    <!-- Request Body -->
                    <div x-show="tab==='request'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                        </th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">msisdn</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Numeric
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Customer’s 13 digit phone number e.g. 2347055699312
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">input</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">For first dial, this fields
                                            comes with the short (without #) e.g *444 subsequently, with the user’s
                                            input e.g. 1
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">sessionid</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            This displays a unique numeric ID for each request
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">network</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            It identifies the network providers’ which includes MTN, Glo, Airtel or
                                            9Mobile
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">action</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            This could either be begin, request, or end begin– means a new request
                                            request – means session should be continued end – means session should be
                                            ended
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">allinput</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            For first dial, this fields comes with the short (without #) e.g .*444
                                            subsequently, the concatenation of the initial input and other user input
                                            e.g.*444*1
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response body'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                        </th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">message</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            String of message (140 characters) to be displayed to the user
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">action</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">This could either be request
                                            or end request – means session should be continued end – means session
                                            should be ended
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Request -->
                    <div x-show="tab==='sample'" class="bg-card border border-border rounded-lg mb-8">
                        <div class="p-6 border-b border-border">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold flex items-center gap-2">

                                </h3>
                                <button @click="copyText" x-ref="copyButton"
                                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm border border-border rounded-md hover:bg-muted transition-colors">
                                    <i class="fas fa-copy text-sm"></i>
                                    Copy
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">
http://CLIENT_FULL_BASEURL?msisdn=<span class="text-purple-400">23478599658965</span>&input=*<span
                                        class="text-purple-400">444</span>&sessionid=<span class="text-purple-400">123555522</span>&net work=MTN&action=begin&allinput=*<span
                                        class="text-purple-400">444</span>*<span class="text-purple-400">1</span>
                            </pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{<span class="text-green-400">"message"</span>: <span class="text-green-400">"Welcome to Creditswitch\n\n1.Airtime/Data\n2.Airtime Swap\n3.Fund Wallet\n4.Balance
\n5.Transactions\n6.Change PIN"</span>,  <span class="text-green-400">"action"</span>:<span class="text-green-400">"request"</span> }
                            </pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 mt-20">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">USSD Push Notification Application Service</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
GET
                        </span>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        This API describe how a third party can initiate USSD push to subscriber mobile phone number
                        from CreditSwitch Platform.
                    </p>

                </div>


                <!-- Service Information -->
                <div class="bg-card border border-border rounded-lg mb-8">
                    <div class="p-6 border-b border-border">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <i class="fas fa-circle-info text-accent text-xl"></i>

                            Service Information
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">http://BASEURL:PORT
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                    <div class="mt-1 p-3">
                                        <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                                            GET
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Tabs -->
                <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'request' }">
                    <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'request' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='request'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Request Body

                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'sample' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='sample'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Request Body
                        </button>

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'response body' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='response body'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Response Body
                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'response' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='response'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Response
                        </button>
                    </div>

                    <!-- Request Body -->
                    <div x-show="tab==='request'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                        </th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">msisdn</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Numeric
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            13 digit Phone number of the subscriber that will receive the push
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">network</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Mobile network of the
                                            subscriber
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">username</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            The username that was assigned to the third-party user during integration
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">password</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            The Password that was assigned to the third-party user during integration
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">msg</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            A 130-character text that will be display to subscribers
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">msg_type</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            This could either be begin, continue, or end begin– means apass as
                                            instruction to create new session. continue-will allow subscriber response
                                            back. End – means terminate the sessiong
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">sessionid</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                O
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            set this to empty string when msg_type is begin, for continue and end
                                            request you should return back the generated sessionid
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response body'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                        </th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">msisdn</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            msisdn provided in the payload
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">sessionid</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Session Id for the request
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">network</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Network of the msisdn
                                            provided
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">input</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">user input (it could be
                                            empty if it does not require input from the user)
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Request -->
                    <div x-show="tab==='sample'" class="bg-card border border-border rounded-lg mb-8">
                        <div class="p-6 border-b border-border">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold flex items-center gap-2">

                                </h3>
                                <button @click="copyText" x-ref="copyButton"
                                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm border border-border rounded-md hover:bg-muted transition-colors">
                                    <i class="fas fa-copy text-sm"></i>
                                    Copy
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">
                                    "http://BASEURL:PORT/ussd_push?msg= welcome to Creditswitch
Pro\n\n1.Win <span class="text-purple-400">10</span>,<span class="text-purple-400">000</span> airtime\n2.Refer a friend&msisdn=<span
                                        class="text-purple-400">23480000000</span>&username=xyz&password=xzy&msg_type=<span
                                        class="text-blue-400">continue</span>&network=MTN&sessionid=<span
                                        class="text-purple-400">111192029228292</span>"
                            </pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{<span class="text-green-400">"msisdn"</span>:<span class="text-green-400">" 23480000000"</span>,<span
                                        class="text-green-400">"sessionid"</span>:<span class="text-green-400">"111192029228292"</span>,<span
                                        class="text-green-400">"network"</span>:<span
                                        class="text-green-400">"MTN"</span>,<span class="text-green-400">"input"</span>:<span
                                        class="text-green-400">"1"</span>}
                            </pre>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Try It Out Section -->
                <div class="bg-card border border-border rounded-lg mb-8">
                    <div class="p-6 border-b border-border">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <svg class="h-5 w-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Try It Out
                        </h3>
                    </div>
                    <div class="p-6">
                        <p class="text-muted-foreground mb-4">
                            Test this endpoint with your credentials in our interactive API explorer.
                        </p>
                        <button class="inline-flex items-center gap-2 px-4 py-2 bg-accent hover:bg-accent/90 text-accent-foreground rounded-md transition-colors">
                            Open API Explorer
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </button>
                    </div>
                </div>


            </div>
        </main>
    </div>

<?php
require_once "../components/footer.php";
?>