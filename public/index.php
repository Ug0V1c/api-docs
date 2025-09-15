<!DOCTYPE html>
<html lang="en" class="dark" >
<?php
include 'components/head.html';
?>
<body class="min-h-screen bg-background text-foreground">

<header class="sticky top-0 z-50 bg-primary border-b border-border">
    <div class="flex items-center justify-between px-4">
        <div class="flex items-center gap-4">
            <button id="mobile-menu-btn" class="lg:hidden text-primary-foreground hover:bg-primary/80 p-2 rounded-md">
                <i id="menu-icon" class="fas fa-bars text-lg"></i>
                <i id="close-icon" class="fas fa-times text-lg hidden"></i>

            </button>
            <div class="flex items-center gap-3">
                <img src="img/creditswitchlogoife.png" class="py-3 h-16"/>
            </div>
        </div>

    </div>
</header>

<div class="flex">
    <!-- Sidebar -->
    <?php
        include 'components/sidebar.html';
    ?>

    <!-- Overlay for mobile -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 lg:hidden hidden"></div>

    <!-- Main Content -->
    <main class="flex-1 min-w-0">
        <div class="max-w-4xl mx-auto p-6 lg:p-8">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-sm text-muted-foreground mb-8">
                <span>API Reference</span>
                <i class="fas fa-user text-accent text-sm"></i>

                <span class="text-foreground font-medium">Get Merchant Info</span>
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
Get Allowed Services operation enables Creditswitch integrator to fetch current info about integrator's
                    account, such as the balance, allowed in addresses, available services, and the discount given for each
                    service.
                </p>
            </div>

            <!-- Service Information -->
            <div class="bg-card border border-border rounded-lg mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <svg class="h-5 w-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        Service Information
                    </h3>
                </div>
                <div class="p-6">
                    <div class="grid gap-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">baseUrl/api/v1/mdetails</div>
                            </div>
                            <div>
                                <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                <div class="mt-1">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
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
            <div  class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'request' }">
                <div class="flex space-x-4 border-b mb-4">

                    <button class="px-4 py-2 font-serif  flex gap-2"
                            :class="tab === 'request' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
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
                </div>

                <!-- Request Body -->
                <div x-show="tab==='request'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name</th>
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
                                        Checksum computed for the request. See "Security: Checksum for hash computation steps"
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
                            <button @click="copyText"  x-ref="copyButton"
                                    class="inline-flex items-center gap-2 px-3 py-1.5 text-sm border border-border rounded-md hover:bg-muted transition-colors">
                                <i class="fas fa-copy text-sm"></i>
                                Copy
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode" >{
  "loginId": 1234,
  "key": "0688378ec7fe23",
  "checksum": "#2yx&23Unyc19"
}</pre>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Try It Out Section -->
            <div class="bg-card border border-border rounded-lg mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <svg class="h-5 w-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </button>
                </div>
            </div>


        </div>
    </main>
</div>

<!-- Footer -->
<?php
include 'components/footer.html'
?>


<script>
    // Mobile menu functionality
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebar-overlay');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    let sidebarOpen = false;

    function toggleSidebar() {
        sidebarOpen = !sidebarOpen;
        if (sidebarOpen) {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
            menuIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    }

    mobileMenuBtn.addEventListener('click', toggleSidebar);
    sidebarOverlay.addEventListener('click', toggleSidebar);

    // Sidebar navigation
    const sidebarItems = document.querySelectorAll('.sidebar-item');
    sidebarItems.forEach(item => {
        item.addEventListener('click', function() {
            // Remove active class from all items
            sidebarItems.forEach(i => {
                i.classList.remove('active', 'bg-sidebar-accent', 'text-sidebar-accent-foreground');
                i.classList.add('text-sidebar-foreground', 'hover:bg-sidebar-primary', 'hover:text-sidebar-primary-foreground');
            });
            console.log(this)

            // Add active class to clicked item
            this.classList.add('active', 'bg-sidebar-accent', 'text-sidebar-accent-foreground');
            this.classList.remove('text-sidebar-foreground', 'hover:bg-sidebar-primary', 'hover:text-sidebar-primary-foreground');

            // Close mobile sidebar
            if (sidebarOpen) {
                toggleSidebar();
            }
        });
    });



    function copyText() {
        const text = this.$refs.sampleCode.textContent;

        navigator.clipboard.writeText(text).then(() => {
            let copyButton = this.$refs.copyButton;
            const originalHtml = copyButton.innerHTML;
            console.log(originalHtml);

            copyButton.innerHTML = `
                        <i class="fas fa-check text-sm"></i>
                        Copied!
                    `;
            setTimeout(() => {
                copyButton.innerHTML = originalHtml;
            }, 2000);
        });
    }

</script>


</body>
</html>