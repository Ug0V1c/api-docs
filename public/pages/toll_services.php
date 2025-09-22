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

                    <span class="text-foreground font-medium">Toll Services</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Toll Services</h1>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        This service will fund a user's Toll Account.
                    </p>

                </div>

                <div class="mb-4">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">Toll Account Validation</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>

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
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">{{baseUrl}}toll/validate
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                    <div class="mt-1 p-3">
                                        <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                                            POST
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
                                        <td class="py-3 px-4 font-mono text-sm">loginId</td>
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
                                            Merchant id provided during integration
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">key</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchants (public) key</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">customerId</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Id of Toll account</td>
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
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">{
    "loginId": "{{loginId}}",
    "key": "{{publicKey}}",
    "customerId": "1234-00"
}</pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{
    "statusCode":"00","statusDescription":"Successful","result":{
    "result": {
    "status": "200",
    "message": "Successful",
    "type": "LCC",
    "name": "TEST LCC_TESTER",
    "customerId": "1234-00",
    "reference": "162669082710000",
    "accountNumber": null,
    "phoneNumber": null,
    "emailAddress": null,
    "canVend": true,
    "wallet": 2 }
    },
    "status":true
}
                            </pre>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="mb-4 mt-16">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">Toll Account Funding</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>

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
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">{{baseUrl}}toll/pay
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                    <div class="mt-1 p-3">
                                        <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                                            POST
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
                                        <td class="py-3 px-4 font-mono text-sm">loginId</td>
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
                                            Merchant id provided during integration
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">key</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchants (public) key</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">serviceId</td>
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
                                            B01T Is the service code for betting
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">customerId</td>
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
                                            Bet ID of the customer
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">amount</td>
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
                                            Amount to fund Bet ID
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">name</td>
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
                                            name of the account associated with the Bet ID
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
{
    "loginId": "{{loginId}}",
    "key": "{{publicKey}}",
    "serviceId" : "B01T",
    "customerId":"34382",
    "amount": 200,
    "name" : "OLUFEMI ISAAC BABATUNDE",
    "provider" : "BangBet"
}                              
                            </pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{
    "statusCode": "00",
    "statusDescription": "successful"
    {
    "status": true,
    "result": {
    "status": "200",
    "message": "Successfully processed the payment request",
    "name": "OLUFEMI ISAAC BABATUNDE",
    "customerId": "1234-00",
    "amount": "100.00",
    "transId": "0543869127",
    "date": "2021-07-19 12:55:10",
    "type": "LCC" } }
}
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
require_once '../components/head.php';
?>