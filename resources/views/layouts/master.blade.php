<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My Glassmorphism' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/icon.png') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.5.x/dist/component.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
  </head>
  <body class="text-gray-700 dark:text-gray-200">
    <div x-data="setup()" x-init="setTimeout(() => {$refs.loading.classList.add('hidden'); setColors(color);}, 1000);" :class="{ 'dark': isDark}" class="dark">
      <div class="flex h-screen antialiased text-gray-900 dark:text-gray-200 bg-light dark:bg-dark">
        <div class="z-0">
          <!-- <div class="w-[350px] h-[350px] md:w-[550px] md:h-[550px] bg-[#4CFA9D75] rounded-full fixed -right-[100px] -top-[200px] blur-[300px]"></div>
          <div class="w-[350px] h-[350px] md:w-[550px] md:h-[550px] bg-[#72E9DC75] rounded-full fixed left-[40px] top-[100px] blur-[300px]"></div>
          <div class="w-[350px] h-[350px] md:w-[550px] md:h-[550px] bg-[#FF005C75] rounded-full fixed left-[600px] -bottom-[350px] blur-[300px]"></div> -->
          <div class="w-[350px] h-[350px] md:w-[550px] md:h-[550px] -right-[100px] -top-[200px] bg-primary opacity-60 rounded-full fixed blur-[200px]"></div>
          <div class="w-[350px] h-[350px] md:w-[550px] md:h-[550px] left-[40px] top-[100px] bg-primary-light opacity-60 rounded-full fixed blur-[200px]"></div>
          <div class="w-[350px] h-[350px] md:w-[550px] md:h-[550px] left-[600px] -bottom-[350px] bg-primary opacity-60 rounded-full fixed blur-[200px]"></div>
          <div class="h-[75px] w-[1050px] -left-[400px] top-[700px] bg-gradient-to-r from-primary-50 to-primary-light fixed blur-2xl rotate-12 md:rotate-45"></div>
          <div class="h-[50px] w-[1200px] -left-[300px] top-[650px] bg-gradient-to-r from-primary-light via-primary-lighter to-primary-100 fixed blur-2xl rotate-12 md:rotate-45"></div> 
        </div>

        <!-- Loading screen -->
        <div
          x-ref="loading"
          class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white glass dark:glass-dark backdrop-blur-[40px]"
        >
          <svg class="animate-bounce h-10 w-10 rounded-full mr-3 glass dark:glass-dark backdrop-blur-[40px]" viewBox="0 0 24 24"></svg>
          <!-- Loading..... -->
        </div>
        
        <!-- Sidebar -->
        @include('layouts.sidebar')


        <div class="flex-1 p-5 h-full overflow-x-hidden overflow-y-auto">
          <!-- Navbar -->
          @include('layouts.header')

          <!-- Main Content -->
          @yield('content')

          <!-- Footer -->
          @include('layouts.footer')
        </div>

        <!-- Panels -->
        @include('layouts.setting_panel')
        @include('layouts.notification_panel')
        @include('layouts.search_panel')

      </div>
    </div>
  </body>
</html>

<script>
  const setup = () => {
    const getTheme = () => {
      if (window.localStorage.getItem('dark')) {
        return JSON.parse(window.localStorage.getItem('dark'))
      }

      return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
    }

    const setTheme = (value) => {
      window.localStorage.setItem('dark', value)
    }

    const getColor = () => {
      if (window.localStorage.getItem('color')) {
        return window.localStorage.getItem('color')
      }
      return 'cyan'
    }

    const setColors = (color) => {
      const root = document.documentElement
      root.style.setProperty('--color-primary', `var(--color-${color})`)
      root.style.setProperty('--color-primary-50', `var(--color-${color}-50)`)
      root.style.setProperty('--color-primary-100', `var(--color-${color}-100)`)
      root.style.setProperty('--color-primary-light', `var(--color-${color}-light)`)
      root.style.setProperty('--color-primary-lighter', `var(--color-${color}-lighter)`)
      root.style.setProperty('--color-primary-dark', `var(--color-${color}-dark)`)
      root.style.setProperty('--color-primary-darker', `var(--color-${color}-darker)`)
      this.selectedColor = color
      window.localStorage.setItem('color', color)
    }

    return {
      loading: true,
      isDark: getTheme(),
      toggleTheme() {
        this.isDark = !this.isDark
        setTheme(this.isDark)
      },
      setLightTheme() {
        this.isDark = false
        setTheme(this.isDark)
      },
      setDarkTheme() {
        this.isDark = true
        setTheme(this.isDark)
      },
      color: getColor(),
      selectedColor: 'cyan',
      setColors,
      toggleSidbarMenu() {
        this.isSidebarOpen = !this.isSidebarOpen
      },
      isSettingsPanelOpen: false,
      openSettingsPanel() {
        this.isSettingsPanelOpen = true
        this.$nextTick(() => {
          this.$refs.settingsPanel.focus()
        })
      },
      isNotificationsPanelOpen: false,
      openNotificationsPanel() {
        this.isNotificationsPanelOpen = true
        this.$nextTick(() => {
          this.$refs.notificationsPanel.focus()
        })
      },
      isSearchPanelOpen: false,
      openSearchPanel() {
        this.isSearchPanelOpen = true
        this.$nextTick(() => {
          this.$refs.searchInput.focus()
        })
      },
      isMobileSubMenuOpen: false,
      openMobileSubMenu() {
        this.isMobileSubMenuOpen = true
        this.$nextTick(() => {
          this.$refs.mobileSubMenu.focus()
        })
      },
      isMobileMainMenuOpen: false,
      openMobileMainMenu() {
        this.isMobileMainMenuOpen = true
        this.$nextTick(() => {
          this.$refs.mobileMainMenu.focus()
        })
      },
    }
  }
</script>

@yield('scripting')
