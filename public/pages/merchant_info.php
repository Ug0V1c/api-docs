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
                    <i class="fas fa-user text-accent text-sm"></i>

                    <span class="text-foreground dark:text-black font-medium">Get Merchant Info</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Get Merchant Info</h1>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        The <strong>Get Merchant Details</strong> provides you with real-time access to essential
                        account details. This includes current balance, authorized inbound IP addresses, a list of
                        available services, and other info.
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
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">baseUrl/api/v1/mdetails
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
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchants (public) key</td>
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
                                            Checksum computed for the request. See "Security: Checksum for hash
                                            computation
                                            steps"
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
                                                Collection
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">An array of merchant
                                            details
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
        "name": "Csw Airtel Switch",
        "balance": "91226.40",
        "status": "active",
        "email": "info@creditswitch.com",
        "allowedIps": [
            "127.0.0.1"
        ],
        "serviceDetail": [
            [
                "A01E",
                "0.00"
            ],
            [
                "A02E",
                "0.00"
            ],
            [
                "P10N",
                "1.50"
            ],
            [
                "P11N",
                "1.50"
            ],
            [
                "P04N",
                "1.50"
            ],
            [
                "B01T",
                "8.00"
            ],
            [
                "B03T",
                "5.00"
            ],
            [
                "E01E",
                "0.00"
            ],
            [
                "E02E",
                "0.00"
            ],
            [
                "P12N",
                "1.50"
            ],
            [
                "C2TV",
                "1.50"
            ],
            [
                "C3TV",
                "2.00"
            ],
            [
                "C1TV",
                "1.50"
            ],
            [
                "S01M",
                "0.00"
            ],
            [
                "S02M",
                "0.00"
            ],
            [
                "S03M",
                "0.00"
            ],
            [
                "S04M",
                "0.00"
            ],
            [
                "INT1",
                "0.00"
            ],
            [
                "INT2",
                "0.00"
            ],
            [
                "INT3",
                "0.00"
            ],
            [
                "INT4",
                "0.00"
            ],
            [
                "INT5",
                "0.00"
            ],
            [
                "INT6",
                "0.00"
            ],
            [
                "INT7",
                "0.00"
            ],
            [
                "INT8",
                "0.00"
            ],
            [
                "INT9",
                "0.00"
            ],
            [
                "INT10",
                "0.00"
            ],
            [
                "INT11",
                "0.00"
            ],
            [
                "INT12",
                "0.00"
            ],
            [
                "INT13",
                "0.00"
            ],
            [
                "INT14",
                "0.00"
            ],
            [
                "INT15",
                "0.00"
            ],
            [
                "INT16",
                "0.00"
            ],
            [
                "INT17",
                "0.00"
            ],
            [
                "INT18",
                "0.00"
            ],
            [
                "INT19",
                "0.00"
            ],
            [
                "INT20",
                "0.00"
            ],
            [
                "INT21",
                "0.00"
            ],
            [
                "INT22",
                "0.00"
            ],
            [
                "INT23",
                "0.00"
            ],
            [
                "INT24",
                "0.00"
            ],
            [
                "INT25",
                "0.00"
            ],
            [
                "INT26",
                "0.00"
            ],
            [
                "INT27",
                "0.00"
            ],
            [
                "INT28",
                "0.00"
            ],
            [
                "INT29",
                "0.00"
            ],
            [
                "INT30",
                "0.00"
            ],
            [
                "INT31",
                "0.00"
            ],
            [
                "B06T",
                "0.00"
            ],
            [
                "B07T",
                "0.00"
            ],
            [
                "B08T",
                "0.00"
            ],
            [
                "P01N",
                "1.50"
            ],
            [
                "P02N",
                "1.50"
            ],
            [
                "P03N",
                "1.50"
            ],
            [
                "P05N",
                "1.50"
            ],
            [
                "P06N",
                "1.50"
            ],
            [
                "P07N",
                "1.50"
            ],
            [
                "P08N",
                "1.50"
            ],
            [
                "P09N",
                "1.50"
            ],
            [
                "P13N",
                "1.50"
            ],
            [
                "P14N",
                "1.50"
            ],
            [
                "P15N",
                "1.50"
            ],
            [
                "P16N",
                "1.50"
            ],
            [
                "P17N",
                "1.50"
            ],
            [
                "P18N",
                "1.50"
            ],
            [
                "P19N",
                "1.50"
            ],
            [
                "P20N",
                "1.50"
            ],
            [
                "P21N",
                "1.50"
            ],
            [
                "T01N",
                "0.00"
            ],
            [
                "D02D",
                "0.00"
            ]
        ],
        "transactionsToday": 0
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