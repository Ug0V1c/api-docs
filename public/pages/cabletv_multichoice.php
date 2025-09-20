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

                <span class="text-foreground font-medium">Cable TV: Multichoice</span>
            </div>

            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <h1 class="text-3xl font-bold text-balance">Cable TV: Multichoice(DSTV & GOTV)</h1>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    Service to pay for an existing subscription on Multichoice (DSTV and GOTV) cable TV account. Basically, there are three (3) phases for this web service – validation of smart card number, fetching available multichoice product codes and account vending.
                </p>
            </div>

            <div class="mb-4 mt-16">
                <div class="flex items-center gap-3 mb-4">
                    <h6 class="text-2xl font-bold text-balance">Validate Customer Number/Smartcard Number</h6>
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
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl//api/v1/cabletv/multichoice/validate
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Checksum computed for the request. See "Security: Checksum" section for hash computation steps</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Smart card number or Customer Number.</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Multichoice service type – ‘dstv’ or ‘gotv’.</td>
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
{"loginId":"1234","key":"f7a2b427de…","checksum":"JDJhJDE…","customerNo":"10553886499","serviceId":"dstv"}                                
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding details retrieved after validating customer number or smartcard number. It holds information such as customer name, invoice period, next due date etc.</td>
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
{
"statusCode": "00",

"statusDescription": {

"customerNo": 300846162,

"firstname": "AYOBAMI OJO",

"lastname": "",

"customerType": "GOTV",

"invoicePeriod": "",

"dueDate": "2021-10-26T13:32:11.227+01:00",

"amount": 2500 }

}
                            </pre>
                        </div>
                    </div>
                </div>

                
            </div>

            <div class="mb-4 mt-16">
                <div class="flex items-center gap-3 mb-4">
                    <h6 class="text-2xl font-bold text-balance">Fetch Multichoice Product Codes</h6>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    This can be used to retrieve available multichoice products. Each product has a code, description and price. Product codes can be fetched by either of these two methods – finding available standalone products or finding available add-ons for a selected product.
                </p>

            </div>
            <p class="text-xl font-bold text-balance mb-3">a). Find Standalone Products</p>

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
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl//api/v1/cabletv/multichoice/fetchproducts
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Multichoice service type – ‘dstv’ or ‘gotv’.</td>
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
{"loginId":"1234","key":"f7a2b427d..","serviceId":"dstv"}                                
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">statusDescription is a json that has embedded in it an ‘items’ object, which contains available products. items an array of composite objects – code, invoicePeriods, price, name, description</td>
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
{
    "statusCode":"00","statusDescription":{"items":[{"availablePricingOptions":[{"monthsPaidFor":1,"price":2000,"invoicePeriod":1}, 
    {"monthsPaidFor":2,"price":4000,"invoicePeriod":1},{"monthsPaidFor":3,"price":6000,"invoicePeriod":1},{"monthsPaidFor":4,
    "price":8000,"invoicePeriod":1},{"monthsPaidFor":5,"price":10000,"invoicePeriod":1}, {"monthsPaidFor":6,"price":12000,
    "invoicePeriod":1},{"monthsPaidFor":7,"price":14000,"invoicePeriod":1},{"monthsPaidFor":8,"price":16000,"invoicePeriod":1},
    {"monthsPaidFor":9,"price":18000,"invoicePeriod":1}, {"monthsPaidFor":10,"price":20000,"invoicePeriod":1},{"monthsPaidFor":12,
    "price":22000,"invoicePeriod":12}],"code":"ACSSE36","name":"DStv Access","description":" "},{"availablePricingOptions":
    [{"monthsPaidFor":1,"price":4000,"invoicePeriod":1}, {"monthsPaidFor":2,"price":8000,"invoicePeriod":1},{"monthsPaidFor":3,
    "price":12000,"invoicePeriod":1},{"monthsPaidFor":4,"price":16000,"invoicePeriod":1},{"monthsPaidFor":5,"price":20000,
    "invoicePeriod":1}, {"monthsPaidFor":6,"price":24000,"invoicePeriod":1},{"monthsPaidFor":7,"price":28000,"invoicePeriod":1},
    {"monthsPaidFor":8,"price":32000,"invoicePeriod":1},{"monthsPaidFor":9,"price":36000,"invoicePeriod":1},{"monthsPaidFor":10,
    "price":40000,"invoicePeriod":1}, {"monthsPaidFor":12,"price":44000,"invoicePeriod":12}],"code":"COFAME36","name":"DStv Family",
    "description":" "},{"availablePricingOptions":[{"monthsPaidFor":1,"price":6800,"invoicePeriod":1},{"monthsPaidFor":2,"price":13600,
    "invoicePeriod":1}, {"monthsPaidFor":3,"price":20400,"invoicePeriod":1},{"monthsPaidFor":4,"price":27200,"invoicePeriod":1},
    {"monthsPaidFor":5,"price":34000,"invoicePeriod":1},{"monthsPaidFor":6,"price":40800,"invoicePeriod":1},{"monthsPaidFor":7,
    "price":47600,"invoicePeriod":1}, {"monthsPaidFor":8,"price":54400,"invoicePeriod":1},{"monthsPaidFor":9,"price":61200,
    "invoicePeriod":1},{"monthsPaidFor":10,"price":68000,"invoicePeriod":1},{"monthsPaidFor":12,"price":74800,"invoicePeriod":12}],
    "code":"COMPE36","name":"DStv Compact","description":" "}, {"availablePricingOptions":[{"monthsPaidFor":1,"price":10650,
    "invoicePeriod":1},{"monthsPaidFor":2,"price":21300,"invoicePeriod":1},{"monthsPaidFor":3,"price":31950,"invoicePeriod":1},
    {"monthsPaidFor":4,"price":42600,"invoicePeriod":1}, {"monthsPaidFor":5,"price":53250,"invoicePeriod":1},{"monthsPaidFor":6,
    "price":63900,"invoicePeriod":1},{"monthsPaidFor":7,"price":74550,"invoicePeriod":1},{"monthsPaidFor":8,"price":85200,
    "invoicePeriod":1},{"monthsPaidFor":9,"price":95850,"invoicePeriod":1}, {"monthsPaidFor":10,"price":106500,"invoicePeriod":1},
    {"monthsPaidFor":12,"price":117150,"invoicePeriod":12}],"code":"COMPLE36","name":"DStv Compact Plus","description":" "},
    {"availablePricingOptions":[{"monthsPaidFor":1,"price":15800,"invoicePeriod":1}, {"monthsPaidFor":2,"price":31600,
    "invoicePeriod":1},{"monthsPaidFor":3,"price":47400,"invoicePeriod":1},{"monthsPaidFor":4,"price":63200,"invoicePeriod":1},
    {"monthsPaidFor":5,"price":79000,"invoicePeriod":1},{"monthsPaidFor":6,"price":94800,"invoicePeriod":1},"code":"FTAE36",
    "name":"DStv FTA Plus","description":" "}]}
}
                            </pre>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-xl font-bold text-balance mb-3 mt-12">b). Find Product Add-ons for Selected Product</p>

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
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl//api/v1/cabletv/multichoice/productaddons
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Multichoice service type – ‘dstv’ or ‘gotv’.</td>
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
    "loginId": "1234",
    "key": "f7a2b427d2…",
    "serviceId": "dstv",
    "primaryProductCode": "ACSSE36"
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
                                <tr>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">statusDescription is a string that has embedded in it an ‘items’ object, which contains available products. items an array of composite objects – code, price, name, description</td>
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
{"statusCode":"00","statusDescription":{"items":[{"code":"ASIADDE36","price":5050,
"name":"Asian Add-on","description":" "},{"code":"HDPVRE36","price":2200,"name":"HDPVR\/XtraView","description":" "}]}}
                            </pre>
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
                    Now you can either RENEW an existing subscription or CHANGE PACKAGE to another
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
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">baseUrl/api/v1/cabletv/multichoice/vend
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Checksum computed for the request. See "Security: Checksum" section for hash computation steps</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Multichoice service type – ‘dstv’ or ‘gotv’</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Unique transaction Id for the request. Maxlength (36characters)</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Customer number retrieved at validation stage.</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Customer name retrieved at validation stage.</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground"><span class="font-bold">(For renew option leave as empty array [] )</span> An array of product/addon codes selected. Codes can be fetched from the related method calls (find standalone products and find product addons)</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground"><span class="font-bold">(For renew option amount is gotten from the validate customer API end point)</span> Total transaction amount – in case of a 12 month invoice period, the product prices need to be multiplied by 11</td>
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">Invoice period for which the payment is made. Retrieved when validating customer number. Can be either 1 or 12 (months)</td>
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
    "serviceId": "gotv",
    "customerNo": "300846162",
    "customerName": "AYOBAMI OJO",
    "productsCodes": [ ],
    "amount": "800",
    "invoicePeriod": "1",
    "checksum": "{{checkSum}}",
    "transactionRef": "te333u9u9j3949"
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
                                    <td class="py-3 px-4 text-sm text-muted-foreground">statusDescription is a json string that has embedded in it details of the transaction. If successful, it contains object such as amount, transactionNo (Creditswitch’s unique reference generated for the transaction)</td>
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
{
    "statusCode": "00",
    "statusDescription": {
    "message": "successful",
    "amount": "4",
    "type": "gotv",
    "package": "Renewal",
    "transactionRef": "test0bab9419g",
    "transactionNo": "941851634826388" }
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