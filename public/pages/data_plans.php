<!DOCTYPE html>
<html lang="en" class="dark">
<?php
include '../components/head.html';
?>
<body class="min-h-screen bg-background text-foreground">

<?php
include '../components/header_nav.html';
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
                <i class="fas fa-user text-accent text-sm"></i>

                <span class="text-foreground font-medium">Data Plans</span>
            </div>

            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <h1 class="text-3xl font-bold text-balance">Data Plans</h1>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    This service provides all available and active data plans based on the serviceId provided.
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
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">	baseUrl/api/v1/mdataplans
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
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">application/json</div>
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
                                        Merchant id provided during integration
                                    </td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding service id for the request type. See "Services" section for the available services and corresponding service codes for each.</td>
                                </tr>
                                <tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">
                                        Merchant (public) key
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
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto lg:pb-4" x-ref="sampleCode">
{"loginId":1234,"serviceId":"D02D","key":"0688378ec7fe233" }
</pre>
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
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">statusCode</td>
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
                                        Status of the transaction. 00 signifies success
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">statusDescription</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description for the status code. 00=Successful</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">The serviceId provided in the request body</td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">productId</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">The corresponding productId</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">dataPlan</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">An array of all data plans available for the supplied serviceId</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
{"statusCode": "00","statusDescription": "successful","serviceId": "D02D","dataPlan": [
{"amount": 50,"databundle": "25MB","validity": "1day","productId": "9MO-25MB-15"},
{"amount": 100,"databundle": "100MB","validity": "1day","productId": "9MO-100MB-1"},
{"amount": 200,"databundle": "650MB","validity": "1day","productId": "9MO-650MB-2"},
{"amount":1000,"data bundle":"1GB","validity":"30days,"productId": "9MO-1GB-3"},
{"amount":1200,"databundle":"1.5GB","validity":"30days,productId": "9MO-1.5GB-4"},
{"amount": 1500,"databundle": "7GB","validity": "7days","productId": "9MO-7GB-16"},
{"amount":2000,"databundle":"4.5GB","validity":"30days,"productId": "9MO-4.5GB-5"},
{"amount":3000,"databundle":" 4GB","validity":"30days,"productId": "9MO-4GB-6"},
{"amount":4000,"databundle":"5.5GB","validity":"30days,"productId": "9MO-5.5GB-7"},
{"amount":8000,"databundle":"11.5GB","validity":"30days,"productId": "9MO-11.5GB-8"},
{"amount":10000,"databundle":"15GB", "validity":"30days,"productId": "9MO-15GB-9"},
{"amount":18000,"databundle":"27.5GB","validity":"30days,"productId": "9MO-27.5GB-10"},
{"amount": 27500,"databundle":"30GB","validity":"90days,"productId": "9MO-30GB-11"},
{"amount":55000,"databundle":"60GB","vali dity":"180days,productId": "9MO-60GB-12"},
{"amount":84992,"databundle":"100GB","validity":"100days,"productId": "9MO-100GB-13"},
{"amount":11 0000,"databundle":"120GB","validity":"365days,"productId":
"9MO-120GB-14"}]}
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

<!-- Footer -->
<?php
echo "<script>";
include "../scripts/app.js";
echo "</script>";
?>


</body>
</html>