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
                <i :class="utility_advance_icon + ' text-accent text-sm'"></i>

                <span class="text-foreground dark:text-black font-medium">Utility Advance Service</span>
            </div>

            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <h1 class="text-3xl font-bold text-balance">Utility Advance Service</h1>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    This document gives an overview of the Creditswitch Utility Advance service. This service enables business partners to consume existing services on the Creditswitch Platform in a buy now pay later fashion. For technical assistance with the CSW API contact us at techsupport@creditswitch.com to enable swift response and support.
                </p>

            </div>

            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <h3 class="text-2xl font-bold text-balance">Integration Process Flow</h3>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                    This section contains a description of recommended integration flow which helps minimize the risk of disputing transactions and also increase customer confidence in the system
                </p>

                <p class="text-lg text-muted-foreground leading-relaxed mb-2">
                    1) Authentication: Begin by authenticating through the Login Endpoint to retrieve a bearer token for subsequent API calls.</p>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">2) Loan Eligibility Check: Call the Loan Eligibility Endpoint with the specified payload. This step confirms eligibility and returns potential loan offers if eligible.</p>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">3) Loan Approval: If the user accepts the terms and conditions presented in step 2, the system automatically processes the loan disbursement/approval.</p>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">4) Loan Status: Check the status of an existing loan, utilize the status endpoint.</p>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-2">5) Loan Repayment: To close an existing loan, utilize the Repayment Endpoint as needed.</p>

            </div>


            <div class="mb-4 mt-16">
                <div class="flex items-center gap-3 mb-4">
                    <h6 class="text-2xl font-bold text-balance">Authentication</h6>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    Generate bearer token for subsequent API calls.
                </p>

            </div>


            <!-- Service Information -->
            <div class="bg-card mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <i class="fas fa-circle-info text-accent text-xl"></i>

                        Service Information
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">baseUrl/api/v1/login
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
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request Headers</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm"><p>Content-Type: application/json</p>X-Signature: {{encrypted_checksum}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Tabs -->
            <div class="bg-card mb-8" x-data="{ tab: 'sample' }">
                <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

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
                <div x-show="tab==='sample'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">email</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Email
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">
                                        Configured Email Address
                                    </td>
                                </tr>
                                <tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Password</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response body'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">status</td>
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
                                        Status of the request. true signifies success
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">code</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Integer
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description for the status. 200 = Successful</td>
                                </tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Description of the api response.</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">data</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Object
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">An object containing authentication details.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{
    <span class="text-green-400">"status"</span>:<span class="text-purple-400">true</span>,
    <span class="text-green-400">"code"</span>:<span class="text-purple-400">200</span>,
    <span class="text-green-400">"message"</span>:<span class="text-green-400">"Successful"</span>,
    <span class="text-green-400">"data"</span>: {
        <span class="text-green-400">"token_type"</span>: <span class="text-green-400">"Bearer"</span>,
        <span class="text-green-400">"access_token"</span>: <span class="text-green-400">"eyJygurwiyugiwbreugijbiwqhfiywefgibwa"</span>,
        <span class="text-green-400">"expires_at"</span>: <span class="text-purple-400">7200</span>,
        <span class="text-green-400">"name"</span>: <span class="text-green-400">"John Doe"</span>,
        <span class="text-green-400">"email"</span>: <span class="text-green-400">"john.doe@example.com"</span>
    }
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-4 mt-16">
                <div class="flex items-center gap-3 mb-4">
                    <h6 class="text-2xl font-bold text-balance">Loan Eligibility Check</h6>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    This action confirms recipient's eligibility using agreed metrics and returns with loan offers where eligible. Client is required to make a POST request to this endpoint.
                </p>

            </div>


            <!-- Service Information -->
            <div class="bg-card mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <i class="fas fa-circle-info text-accent text-xl"></i>

                        Service Information
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl/api/v1/loan/eligibility/check
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
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request Headers</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm"><p>Content-Type: application/json</p><p>Bearer: {{access_token}}</p>X-Signature: {{encrypted_checksum}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Tabs -->
            <div class="bg-card mb-8" x-data="{ tab: 'sample' }">
                <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

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
                <div x-show="tab==='sample'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">loginId</td>
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
                                        Merchant Id provided during integration
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">serviceType</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">airtime or data</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">recipient</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Customers phone number</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response body'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">status</td>
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
                                        Status of the request. true signifies success
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">code</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Integer
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description for the status. 200 = Successful</td>
                                </tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Description of the api response.</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">data</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Object
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">An object containing check response with available offer(s).</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{
    <span class="text-green-400">"status"</span>: <span class="text-purple-400">true</span>,
    <span class="text-green-400">"code"</span>: <span class="text-purple-400">200</span>,
    <span class="text-green-400">"message"</span>: <span class="text-green-400">"Successful"</span>,
    <span class="text-green-400">"data"</span>: {
        <span class="text-green-400">"offer1"</span>: {
            <span class="text-green-400">"amount"</span>: <span class="text-green-400">"200"</span>,
            <span class="text-green-400">"serviceId</span>: <span class="text-green-400">"A04E"</span>,
            <span class="text-green-400">"product"</span>: <span class="text-green-400">"airtime"</span>
        },
        <span class="text-green-400">"offer2"</span>: {
            <span class="text-green-400">"amount"</span>: <span class="text-green-400">"100"</span>,
            <span class="text-green-400">"serviceId"</span>: <span class="text-green-400">"A04E"</span>,
            <span class="text-green-400">"product"</span>: <span class="text-green-400">"airtime"</span>
        },
        <span class="text-green-400">"isEligible"</span>: <span class="text-purple-400">true</span>,
        <span class="text-green-400">"reference"</span>: <span class="text-green-400">"077416241021064788727052243034"</span>
    },
    <span class="text-green-400">"meta"</span>: <span class="text-blue-300">null</span>
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mt-16">
                <div class="flex items-center gap-3 mb-4">
                    <h6 class="text-2xl font-bold text-balance">Disburse Loan</h6>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    This action confirms recipient's consent to the loan terms and conditions as indicated by the response returned from step 2) above.
                    <span class="block">Client is required to make a POST request to this endpoint.</span>
                </p>

            </div>


            <!-- Service Information -->
            <div class="bg-card mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <i class="fas fa-circle-info text-accent text-xl"></i>

                        Service Information
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl/api/v1/loan/apply
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
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request Headers</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm"><p>Content-Type: application/json</p><p>Bearer: {{access_token}}</p>X-Signature: {{encrypted_checksum}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Tabs -->
            <div class="bg-card mb-8" x-data="{ tab: 'sample' }">
                <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

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
                <div x-show="tab==='sample'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
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
                                        Merchant Id provided during integration
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">requestId</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Unique transaction Id for the request. Maxlength (36characters)</td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">serviceId</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding service id for the request type. See "Services" section for the available services and corresponding service codes for each.</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Amount with which to top-up amount customers phone Maximum 100000</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">recipient</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Customers phone number to top-up</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response body'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">status</td>
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
                                        Status of the request. true signifies success
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">code</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Integer
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description for the status. 200 = Successful, 202 = Processing, 422 = Failed</td>
                                </tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Description of the vend response.</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">data</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Object
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">An object containing vend response details.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{
    <span class="text-green-400">"status"</span>: <span class="text-purple-400">true</span>,
    <span class="text-green-400">"code"</span>: <span class="text-purple-400">200</span>,
    <span class="text-green-400">"message"</span>: <span class="text-green-400">"Loan Advance Approved Successfully"</span>,
    <span class="text-green-400">"data"</span>: {
        <span class="text-green-400">"requestId"</span>: <span class="text-green-400">"jc1bciigdebc"</span>,
        <span class="text-green-400">"recipient</span>: <span class="text-green-400">"08092343261"</span>,
        <span class="text-green-400">"amount"</span>: <span class="text-green-400">"90.00"</span>
        <span class="text-green-400">"confirmCode"</span>: <span class="text-green-400">"1705997694210722624497994"</span>,
        <span class="text-green-400">"network"</span>: <span class="text-green-400">"9Mobile"</span>,
        <span class="text-green-400">"tranxDate"</span>: <span class="text-green-400">"23-01-2024 9:14 am"</span>
        <span class="text-green-400">"serviceCharge"</span>: <span class="text-green-400">10.00</span>
    },
        <span class="text-green-400">"meta"</span>: <span class="text-blue-300">null</span>
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4 mt-16">
                <div class="flex items-center gap-3 mb-4">
                    <h6 class="text-2xl font-bold text-balance">Get Loan Status</h6>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
GET
                        </span>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    his endpoint is used to confirm the status of a loan application.
                </p>

            </div>


            <!-- Service Information -->
            <div class="bg-card mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <i class="fas fa-circle-info text-accent text-xl"></i>

                        Service Information
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl/api/v1/loan/status/{requestId}
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
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request Headers</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm"><p>Content-Type: application/json</p><p>Bearer: {{access_token}}</p>X-Signature: {{encrypted_checksum}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Tabs -->
            <div class="bg-card mb-8" x-data="{ tab: 'response body' }">
                <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

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

                <div x-show="tab==='response body'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">status</td>
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
                                        Status of the request. true signifies success
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">code</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Integer
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description for the status. 200 = Successful</td>
                                </tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Description of the status check response.</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">data</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Object
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">An object containing utility loan details.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{
    <span class="text-green-400">"status"</span>: <span class="text-purple-400">true</span>,
    <span class="text-green-400">"code"</span>: <span class="text-purple-400">200</span>,
    <span class="text-green-400">"message"</span>: <span class="text-green-400">"Loan Request Retrieved Successfully"</span>,
    <span class="text-green-400">"data"</span>: {
        <span class="text-green-400">"requestId"</span>: <span class="text-green-400">"9a1d44fij437"</span>,
        <span class="text-green-400">"recipient</span>: <span class="text-green-400">"07067729339"</span>,
        <span class="text-green-400">"amount"</span>: <span class="text-green-400">"100"</span>
        <span class="text-green-400">"confirmCode"</span>: <span class="text-green-400">"2021063019080126701629681"</span>,
        <span class="text-green-400">"network"</span>: <span class="text-green-400">"MTN"</span>,
        <span class="text-green-400">"tranxDate"</span>: <span class="text-green-400">"17-01-2024 2:06 pm"</span>
        <span class="text-green-400">"serviceCharge"</span>: <span class="text-green-400">10.00</span>,
        <span class="text-green-400">"status"</span>: <span class="text-green-400">Open</span>
    },
    <span class="text-green-400">"meta"</span>: <span class="text-blue-300">null</span>
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mb-4 mt-16">
                <div class="flex items-center gap-3 mb-4">
                    <h6 class="text-2xl font-bold text-balance">Repay Utility Loan</h6>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    This endpoint is used to finalized or close out an outstanding loan. To confirm the outstanding payment, a call the the loan status endpoint will suffice
                </p>

            </div>


            <!-- Service Information -->
            <div class="bg-card mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <i class="fas fa-circle-info text-accent text-xl"></i>

                        Service Information
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl/api/v1/loan/repay
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
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request Headers</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm"><p>Content-Type: application/json</p><p>Bearer: {{access_token}}</p>X-Signature: {{encrypted_checksum}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Tabs -->
            <div class="bg-card mb-8" x-data="{ tab: 'sample' }">
                <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

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
                <div x-show="tab==='sample'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">requestId</td>
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
                                        Unique transaction Id for the request. Maxlength (36characters)
                                    </td>
                                </tr>
                                <tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Outstanding Loan Amount. Note: It must be the exact amount as indicated by get loan status.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response body'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">status</td>
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
                                        Status of the request. true signifies success
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">code</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Integer
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description for the status. 200 = Successful</td>
                                </tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Description of the status repayment request.</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">data</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Object
                                            </span>
                                    </td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                    </td>
                                    <td class="py-3 px-4 text-sm text-muted-foreground">An object containing utility loan repayment details.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response'" class="bg-card mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{
    <span class="text-green-400">"status"</span>: <span class="text-purple-400">true</span>,
    <span class="text-green-400">"code"</span>: <span class="text-purple-400">200</span>,
    <span class="text-green-400">"message"</span>: <span class="text-green-400">"Loan status updated successfully"</span>,
    <span class="text-green-400">"data"</span>: {
        <span class="text-green-400">"message"</span>: <span class="text-green-400">"Loan status updated successfully"</span>
    },
    <span class="text-green-400">"meta"</span>: <span class="text-blue-300">null</span>
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Try It Out Section -->
            <div class="bg-card mb-8">
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