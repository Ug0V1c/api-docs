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



function themeSwitcher() {
    return {
        dark: localStorage.getItem('theme') === 'dark',
        toggleDark() {
            this.dark = !this.dark;
            localStorage.setItem('theme', this.dark ? 'dark' : 'light');
        },
    }
}


// tailwind.config.js
tailwind.config = {
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                background: 'hsl(222.2 84% 4.9%)',
                foreground: 'hsl(210 40% 98%)',
                card: 'hsl(222.2 84% 4.9%)',
                'card-foreground': 'hsl(210 40% 98%)',
                popover: 'hsl(222.2 84% 4.9%)',
                'popover-foreground': 'hsl(210 40% 98%)',
                primary: 'hsl(263.4 70% 50.4%)',
                'primary-foreground': 'hsl(210 40% 98%)',
                secondary: 'hsl(217.2 32.6% 17.5%)',
                'secondary-foreground': 'hsl(210 40% 98%)',
                muted: 'hsl(217.2 32.6% 17.5%)',
                'muted-foreground': 'hsl(215 20.2% 65.1%)',
                accent: 'hsl(263.4 70% 50.4%)',
                'accent-foreground': 'hsl(210 40% 98%)',
                destructive: 'hsl(0 62.8% 30.6%)',
                'destructive-foreground': 'hsl(210 40% 98%)',
                border: 'hsl(217.2 32.6% 17.5%)',
                input: 'hsl(217.2 32.6% 17.5%)',
                ring: 'hsl(263.4 70% 50.4%)',
                sidebar: 'hsl(220 13% 13%)',
                'sidebar-foreground': 'hsl(220 9% 46%)',
                'sidebar-primary': 'hsl(224 71% 4%)',
                'sidebar-primary-foreground': 'hsl(210 20% 98%)',
                'sidebar-accent': 'hsl(263.4 70% 50.4%)',
                'sidebar-accent-foreground': 'hsl(210 40% 98%)',
                'sidebar-border': 'hsl(217.2 32.6% 17.5%)',
            }
        }
    }
}



