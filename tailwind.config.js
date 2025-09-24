/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js,php}"],
    darkMode: 'class',
    theme: {
    extend: {
        colors: {
            background: 'hsl(222.2 84% 4.9%)',
            foreground: 'hsl(210 40% 98%)',
            // card: 'var(--card)', // Light/dark mode handled via CSS vars
            // 'card-foreground': 'var(--card-foreground)',
            popover: 'hsl(222.2 84% 4.9%)',
            'popover-foreground': 'hsl(210 40% 98%)',
            primary: {
                DEFAULT: '#246E9F',
                light: '#5BA3D0',
                dark: '#1B4F73',
            },
            'primary-foreground': 'hsl(210 40% 98%)',
            secondary: 'hsl(217.2 32.6% 17.5%)',
            'secondary-foreground': 'hsl(210 40% 98%)',
            muted: 'var(--muted)',
            'muted-foreground': 'var(--muted-foreground)',
            accent: '#5BA3D0',
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
            'sidebar-accent': '#246E9F',
            'sidebar-accent-foreground': 'hsl(210 40% 98%)',
            'sidebar-border': 'hsl(217.2 32.6% 17.5%)',
        }


    },
  },
  plugins: [],
}

