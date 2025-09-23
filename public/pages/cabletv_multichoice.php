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
                    <i :class="cabletv_multichoice_icon + ' text-accent text-sm'"></i>

                    <span class="text-foreground dark:text-black font-medium">Cable TV: Multichoice</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Cable TV: Multichoice(DSTV & GOTV)</h1>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-6">
                        This service allows you to pay for an active subscription on Multichoice cable TV accounts,
                        including DSTV and GOTV.
                        The process consists of three main steps:
                    </p>

                    <ol class="list-decimal list-inside space-y-3 text-base text-muted-foreground">
                        <li class="pl-1">🔍 Validate the SmartCard Number</li>
                        <li class="pl-1">📦 Retrieve Available Packages</li>
                        <li class="pl-1">⚡ Complete the Package Purchase</li>
                    </ol>

                </div>

                <div class="mb-4 mt-16">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">Validate SmartCard Number</h6>
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
                            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">
                                        baseUrl/api/v1/cabletv/multichoice/validate
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchant’s (public) key</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">checksum</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Checksum computed for the
                                            request. See "Security: Checksum" section for hash computation steps
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">customerNo</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Smart card number or
                                            Customer Number.
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Multichoice service type –
                                            ‘dstv’ or ‘gotv’.
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
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">{
    "loginId": "{{loginId}}",
    "key": "{{publicKey}}",
    "serviceId": "gotv",
    "customerNo": "8057605642",
    "checksum": "{{checkSum}}"
}
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
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
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
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">statusDescription</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                json
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding details
                                            retrieved after validating customer number or smartcard number. It holds
                                            information such as customer name, invoice period, next due date etc.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">{
    "statusCode": "00",
    "statusDescription": {
        "customerNo": "8057605642",
        "accountStatus": "ACTIVE",
        "firstname": "",
        "lastname": "SAMUEL OLU",
        "customerType": "SUD",
        "invoicePeriod": 1,
        "dueDate": "2025-10-12T00:00:00",
    }
}</pre>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="mb-4 mt-16">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">Fetch Multichoice Packages</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        This can be used to retrieve available multichoice products. Each product has a code,
                        description and price.
                    </p>

                </div>
                <p class="text-xl font-bold text-balance mb-3"> Find Packages</p>

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
                            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">
                                        baseUrl/api/v1/cabletv/multichoice/fetchproducts
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchant’s (public) key</td>
                                    </tr>
                                    <tr>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Multichoice service type –
                                            ‘dstv’ or ‘gotv’.
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
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">{
    "loginId": "{{loginId}}",
    "key": "{{publicKey}}",
    "serviceId": "GOTV"
}</pre>
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
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">statusDescription</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                json
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">statusDescription is a json
                                            that has embedded in it an ‘items’ object, which contains available
                                            products. items an array of composite objects – code, invoicePeriods, price,
                                            name, description
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">{
    "statusCode": "00",
    "statusDescription": {
        "items": [
            {
                "code": "ng_gotv_gohan",
                "name": "GOtv Smallie-monthly",
                "description": "GOtv Smallie-monthly",
                "availablePricingOptions": [
                    {
                        "price": 1900,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 3800,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 5700,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 7600,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 9500,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 11400,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 13300,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 15200,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 17100,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 19000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 22800,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 22800,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            },
            {
                "code": "ng_gotv_golite",
                "name": "GOtv Smallie - quarterly",
                "description": "GOtv Smallie - quarterly",
                "availablePricingOptions": [
                    {
                        "price": 5100,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 10200,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 15300,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 20400,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 25500,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 30600,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 35700,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 40800,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 45900,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 51000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 61200,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 61200,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            },
            {
                "code": "ng_gotv_goltanl",
                "name": "GOtv Smallie-yearly",
                "description": "GOtv Smallie-yearly",
                "availablePricingOptions": [
                    {
                        "price": 15000,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 30000,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 45000,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 60000,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 75000,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 90000,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 105000,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 120000,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 135000,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 150000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 180000,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 180000,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            },
            {
                "code": "ng_gotv_gotvmax",
                "name": "GOtv Max",
                "description": "GOtv Max",
                "availablePricingOptions": [
                    {
                        "price": 8500,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 17000,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 25500,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 34000,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 42500,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 51000,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 59500,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 68000,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 76500,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 85000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 102000,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 102000,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            },
            {
                "code": "ng_gotv_gotvnj1",
                "name": "GOtv Jinja",
                "description": "GOtv Jinja",
                "availablePricingOptions": [
                    {
                        "price": 3900,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 7800,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 11700,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 15600,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 19500,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 23400,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 27300,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 31200,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 35100,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 39000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 46800,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 46800,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            },
            {
                "code": "ng_gotv_gotvnj2",
                "name": "GOtv Jolli",
                "description": "GOtv Jolli",
                "availablePricingOptions": [
                    {
                        "price": 5800,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 11600,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 17400,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 23200,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 29000,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 34800,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 40600,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 46400,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 52200,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 58000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 69600,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 69600,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            },
            {
                "code": "ng_gotv_gotvsupa",
                "name": "GOtv Supa ",
                "description": "GOtv Supa ",
                "availablePricingOptions": [
                    {
                        "price": 11400,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 22800,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 34200,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 45600,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 57000,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 68400,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 79800,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 91200,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 102600,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 114000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 136800,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 136800,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            },
            {
                "code": "ng_gotv_gotvsupaplus",
                "name": "GOtv Supa Plus Bouquet",
                "description": "GOtv Supa Plus Bouquet",
                "availablePricingOptions": [
                    {
                        "price": 16800,
                        "invoicePeriod": 1,
                        "monthsPaidFor": 1
                    },
                    {
                        "price": 33600,
                        "invoicePeriod": 2,
                        "monthsPaidFor": 2
                    },
                    {
                        "price": 50400,
                        "invoicePeriod": 3,
                        "monthsPaidFor": 3
                    },
                    {
                        "price": 67200,
                        "invoicePeriod": 4,
                        "monthsPaidFor": 4
                    },
                    {
                        "price": 84000,
                        "invoicePeriod": 5,
                        "monthsPaidFor": 5
                    },
                    {
                        "price": 100800,
                        "invoicePeriod": 6,
                        "monthsPaidFor": 6
                    },
                    {
                        "price": 117600,
                        "invoicePeriod": 7,
                        "monthsPaidFor": 7
                    },
                    {
                        "price": 134400,
                        "invoicePeriod": 8,
                        "monthsPaidFor": 8
                    },
                    {
                        "price": 151200,
                        "invoicePeriod": 9,
                        "monthsPaidFor": 9
                    },
                    {
                        "price": 168000,
                        "invoicePeriod": 10,
                        "monthsPaidFor": 10
                    },
                    {
                        "price": 201600,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    },
                    {
                        "price": 201600,
                        "invoicePeriod": 12,
                        "monthsPaidFor": 12
                    }
                ]
            }
        ]
    }
}</pre>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-4 mt-16">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">Vend Multichoice Account</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        You can <strong> PURCHASE A PACKAGE</strong> or <strong>RENEW</strong> an existing subscription.
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
                            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">
                                        baseUrl/api/v1/cabletv/multichoice/vend
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
                                        <td class="py-3 px-4 font-mono text-sm">checksum</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Checksum computed for the
                                            request. See "Security: Checksum" section for hash computation steps
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Multichoice service type –
                                            ‘dstv’ or ‘gotv’
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">transactionRef</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Unique transaction Id for
                                            the request. Maxlength (36characters)
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">customerNo</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Customer number retrieved at
                                            validation stage.
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">customerName</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Customer name retrieved at
                                            validation stage.
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">productsCodes</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Array of strings
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground"><span class="font-bold">(For renew option leave as empty array [] )</span>
                                            An array of product/addon codes selected. Codes can be fetched from the
                                            related method calls (find standalone products and find product addons)
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground"><span class="font-bold">(For renew option amount is gotten from the validate customer API end point)</span>
                                            Total transaction amount – in case of a 12 month invoice period, the product
                                            prices need to be multiplied by 11
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">invoicePeriod</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Invoice period for which the
                                            payment is made. Retrieved when validating customer number. Can be either 1
                                            or 12 (months)
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
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">{
    "loginId": "{{loginId}}",
    "key": "{{publicKey}}",
    "serviceId": "gotv",
    "customerNo": "8057605642",
    "customerName": "Samuel Olu",
    "productsCodes": "ng_gotv_gohan",
    "amount": "1900",
    "invoicePeriod": "1",
    "checksum": "{{checkSum}}",
    "transactionRef": "test{{random12digit}}"
} </pre>
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
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">statusDescription</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                json
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">statusDescription is a json
                                            string that has embedded in it details of the transaction. If successful, it
                                            contains object such as amount, transactionNo (Creditswitch’s unique
                                            reference generated for the transaction)
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">{
    "statusCode": "00",
    "statusDescription": {
        "message": "successful",
        "amount": "1900",
        "transactionRef": "850abce6adskl3",
        "transactionNo": "767481625579885"
    }
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
require_once "../components/footer.php";
?>