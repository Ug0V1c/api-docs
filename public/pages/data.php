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
                    <i :class="data_icon + ' text-accent text-sm'"></i>

                    <span class="text-foreground dark:text-black font-medium">Data Plans</span>
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
                        This service provides a list of all <strong>available and active data plans 📶</strong> based on the specified <strong>Service ID 🆔</strong>.
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
                            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr_1fr] gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">
                                        baseUrl/api/v1/mdataplans
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding service id for
                                            the request type. See "Services" section for the available services and
                                            corresponding service codes for each.
                                        </td>
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
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto lg:pb-4"
                                 x-ref="sampleCode">{
    "loginId": "{{loginId}}",
    "serviceId": "D03D",
    "key": "{{publicKey}}"
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description
                                            for the status code. 00=Successful
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">The serviceId provided in
                                            the request body
                                        </td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">The corresponding
                                            productId
                                        </td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">An array of all data plans
                                            available for the supplied serviceId
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
    "statusDescription": "successful",
    "serviceId": "D04D",
    "dataPlan": [
        {
            "amount": 100,
            "databundle": "110MB",
            "short_description": null,
            "productId": "MTN-110MB-11",
            "validity": "1 Day"
        },
        {
            "amount": 200,
            "databundle": "230MB",
            "short_description": null,
            "productId": "MTN-200MB-2",
            "validity": "1 Day"
        },
        {
            "amount": 350,
            "databundle": "500MB",
            "short_description": null,
            "productId": "MTN-500MB-35",
            "validity": "1 Day"
        },
        {
            "amount": 500,
            "databundle": "500MB + 1GB YouTube Night + 100MB YouTube Music",
            "short_description": null,
            "productId": "MTN-600MB-5",
            "validity": "7 Days"
        },
        {
            "amount": 500,
            "databundle": "1GB Daily Plan + 1.5mins.",
            "short_description": null,
            "productId": "MTN-1GB-11",
            "validity": "1 Day"
        },
        {
            "amount": 500,
            "databundle": "600MB + 2mins + 2 SMS",
            "short_description": null,
            "productId": "MTN-XD500-46",
            "validity": "7 Days"
        },
        {
            "amount": 600,
            "databundle": "1.5GB + 100MB YouTube Music ",
            "short_description": null,
            "productId": "MTN-1-5GB-21",
            "validity": "1 Day"
        },
        {
            "amount": 750,
            "databundle": "2GB",
            "short_description": null,
            "productId": "MTN-2GB 2-75",
            "validity": "2 Days"
        },
        {
            "amount": 750,
            "databundle": "2.5GB Daily Plan",
            "short_description": null,
            "productId": "MTN-2-5GB-D12",
            "validity": "1 Day"
        },
        {
            "amount": 800,
            "databundle": "1GB + 1GB YouTube Night + 100MB YouTube Music",
            "short_description": null,
            "productId": "MTN-1GB-26",
            "validity": "7 Days"
        },
        {
            "amount": 900,
            "databundle": "2.5GB",
            "short_description": null,
            "productId": "MTN-2-5GB-27",
            "validity": "2 Days"
        },
        {
            "amount": 1000,
            "databundle": "3.2GB",
            "short_description": null,
            "productId": "MTN-3GB-72",
            "validity": "2 Days"
        },
        {
            "amount": 1000,
            "databundle": "1.5GB + 1GB YouTube Night + 100MB YouTube Music",
            "short_description": null,
            "productId": "MTN-1-5GB-31",
            "validity": "7 Days"
        },
        {
            "amount": 1500,
            "databundle": "2GB + 2mins + 2GB All Night Streaming + 200MB YouTube Music",
            "short_description": "N1,500 = 2GB+2GB",
            "productId": "MTN-1-5GB-4",
            "validity": "30 Days"
        },
        {
            "amount": 1500,
            "databundle": "1.8GB + 6mins + 5 SMS",
            "short_description": null,
            "productId": "MTN-XD1000-47",
            "validity": "7 Days"
        },
        {
            "amount": 1500,
            "databundle": "3.5GB",
            "short_description": null,
            "productId": "MTN-3-5GB-15",
            "validity": "7 Days"
        },
        {
            "amount": 2000,
            "databundle": "2.7GB + 2mins + 2GB All Night Streaming + 200MB YouTube Music",
            "short_description": null,
            "productId": "MTN-2GB-20",
            "validity": "30 Days"
        },
        {
            "amount": 2500,
            "databundle": "3.5GB + 5mins + 2GB All Night Streaming + 200MB YouTube Music",
            "short_description": null,
            "productId": "MTN-3GB-5",
            "validity": "30 Days"
        },
        {
            "amount": 2500,
            "databundle": "6GB Weekly Plan",
            "short_description": null,
            "productId": "MTN-6GB-29",
            "validity": "7 Days"
        },
        {
            "amount": 3000,
            "databundle": " 2.7GB+15mins",
            "short_description": null,
            "productId": "MTN-XD2000-48",
            "validity": "30 Days"
        },
        {
            "amount": 3500,
            "databundle": "7GB + 2GB All Night Streaming",
            "short_description": null,
            "productId": "MTN-4-5GB-6",
            "validity": "30 Days"
        },
        {
            "amount": 3500,
            "databundle": "11GB Weekly Bundle",
            "short_description": null,
            "productId": "MTN-7GB-73",
            "validity": "7 Days"
        },
        {
            "amount": 4500,
            "databundle": "10GB + 10mins + 2GB All Night Streaming + 200MB YouTube Music",
            "short_description": null,
            "productId": "MTN-6GB-21",
            "validity": "30 Days"
        },
        {
            "amount": 5000,
            "databundle": "20GB Weekly Plan",
            "short_description": null,
            "productId": "MTN-20GB-71",
            "validity": "7 Days"
        },
        {
            "amount": 5500,
            "databundle": "12.5GB + 2GB All Night Streaming + 300MB YouTube Music",
            "short_description": null,
            "productId": "MTN-10GB-22",
            "validity": "30 Days"
        },
        {
            "amount": 5500,
            "databundle": "12.5GB + 36mins + 15 SMS",
            "short_description": null,
            "productId": "MTN-XD5000-49",
            "validity": "7 Days"
        },
        {
            "amount": 6500,
            "databundle": "16.5GB + 10mins + 2GB All Night Streaming + 300MB YouTube Music",
            "short_description": null,
            "productId": "MTN-12GB-12",
            "validity": "30 Days"
        },
        {
            "amount": 7500,
            "databundle": "20GB+2GB YouTube Night+300MB YouTube Music + 25mins.",
            "short_description": null,
            "productId": "MTN-20GB-7",
            "validity": "30 Days"
        },
        {
            "amount": 9000,
            "databundle": "25GB + 4GB All Night Streaming",
            "short_description": null,
            "productId": "MTN-25GB-61",
            "validity": "30 Days"
        },
        {
            "amount": 9000,
            "databundle": "30GB Broadband Router only",
            "short_description": null,
            "productId": "MTN-BR30-30",
            "validity": "30 Days"
        },
        {
            "amount": 11000,
            "databundle": "36GB",
            "short_description": null,
            "productId": "MTN-40GB-9",
            "validity": "30 Days"
        },
        {
            "amount": 14500,
            "databundle": "60GB Monthly Broadband Plan",
            "short_description": null,
            "productId": "MTN-BR45-30",
            "validity": "30 Days"
        },
        {
            "amount": 16000,
            "databundle": "65GB",
            "short_description": null,
            "productId": "MTN-65GB-16",
            "validity": "30 Days"
        },
        {
            "amount": 18000,
            "databundle": "75GB",
            "short_description": null,
            "productId": "MTN-75GB-13",
            "validity": "30 Days"
        },
        {
            "amount": 24000,
            "databundle": "120GB + 5GB Youtube/MS Teams/Zoom (Broadband)",
            "short_description": null,
            "productId": "MTN-BR120GB-24",
            "validity": "30 Days"
        },
        {
            "amount": 35000,
            "databundle": "165GB",
            "short_description": null,
            "productId": "MTN-110GB-30",
            "validity": "30 Days"
        },
        {
            "amount": 40000,
            "databundle": "150GB 2-Month Plan",
            "short_description": null,
            "productId": "MTN-75GB-14",
            "validity": "60 Days"
        },
        {
            "amount": 75000,
            "databundle": "450GB Broadband Plan",
            "short_description": null,
            "productId": "MTN-BR400-3",
            "validity": "90 Days"
        },
        {
            "amount": 90000,
            "databundle": "480GB 3-Month Plan",
            "short_description": null,
            "productId": "MTN-150GB-16",
            "validity": "90 Days"
        }
    ]
}</pre>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Data Vend</h1>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        Service for processing mobile data top-ups on a customer’s phone number via the merchant’s
                        account.
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
                            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr_1fr] gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">
                                        baseUrl/api/v1/dvend
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchant’s (public) key
                                            supplied during integration
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Unique transaction Id for the request. Maxlength (36characters)
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Corresponding service id for the request type. See "Services" section for
                                            the available services and corresponding service codes for each.
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
                                            Amount with which to top-up amount customers phone Maximum 100000
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Customers phone number to top-up
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">date</td>
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
                                            Date-time at which the request was sent .
                                        </td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            The identifier of each data bundle e.g MTN-25MB-10.
                                        </td>
                                    </tr>
                                    <tr>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Checksum computed for the request. See "Security: Checksum" section for hash
                                            computation steps
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
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto lg:pb-4"
                                 x-ref="sampleCode">{
    "loginId": "{{loginId}}",
    "key": "{{publicKey}}",
    "requestId": "{{random12digit}}",
    "serviceId": "D04D",
    "amount": 200,
    "productId": "MTN-200MB-2",
    "recipient": "08134045387",
    "date": "{{$isoTimestamp}}",
    "checksum": "{{checkSum}}"
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
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Corresponding description
                                            for the status code. 00=Successful
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">mReference</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Unique transaction id
                                            supplied by the integrator for the request
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">tranxReference</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Creditswitch’s unique id
                                            generated for the transaction
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">recipient</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Customers number on the
                                            network to which top-up was sent
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Amount credited the
                                            customer
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">confirmCode</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Confirmation code returned
                                            by the network. Sent only for successful transactions
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">Network</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">The actual network fulfilled
                                            by the Telco
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">tranxDate</td>
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Date at which transaction
                                            was carried out
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
    "statusDescription": "Successful",
    "mReference": "iib9ja15i5j1",
    "tranxReference": "2108021419282563095",
    "recipient": "1711004587",
    "amount": 200,
    "confirmCode": "2108021419282563095",
    "network": "Mtn",
    "tranxDate": "02-08-2025 2:19 pm"
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