@extends('layouts.master')

@section('content')
<!-- Main content -->
<main class="z-0">
  <!-- Content -->
  <div class="mt-2">
    <!-- State cards -->
    <div class="grid grid-cols-1 gap-8 py-4 lg:grid-cols-2 xl:grid-cols-4">
      <!-- Value card -->
      <div class="flex items-center justify-between p-4 glass dark:glass-dark backdrop-blur-[40px] rounded-xl after:absolute after:top-0 after:right-0 after:m-2 after:p-2 after:rounded-full after:bg-success">
        <div>
          <h6
            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-gray-300"
          >
            Value
          </h6>
          <span class="text-xl font-semibold text-success">$30,000</span>
          <span class="inline-block px-2 py-px ml-2 text-xs text-emerald-400 bg-emerald-100 rounded-md">
            +4.4%
          </span>
        </div>
        <div>
          <span>
            <div>
              <div class="h-16 w-16 glass dark:glass-dark backdrop-blur-[40px] items-center rounded-full flex">
                <icon class="m-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
                </icon>
              </div>
            </div>
          </span>
        </div>
      </div>

      <!-- Users card -->
      <div class="flex items-center justify-between p-4 glass dark:glass-dark backdrop-blur-[40px] rounded-xl after:absolute after:top-0 after:right-0 after:m-2 after:p-2 after:rounded-full after:bg-warning">
        <div>
          <h6
            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-gray-300"
          >
            Users
          </h6>
          <span class="text-xl font-semibold text-warning">50,021</span>
          <span class="inline-block px-2 py-px ml-2 text-xs text-emerald-400 bg-emerald-100 rounded-md">
            +2.6%
          </span>
        </div>
        <div>
          <span>
            <svg
              class="w-12 h-12 "
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
              />
            </svg>
          </span>
        </div>
      </div>

      <!-- Orders card -->
      <div class="flex items-center justify-between p-4 glass dark:glass-dark backdrop-blur-[40px] rounded-xl after:absolute after:top-0 after:right-0 after:m-2 after:p-2 after:rounded-full after:bg-info">
        <div>
          <h6
            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-gray-300"
          >
            Orders
          </h6>
          <span class="text-xl font-semibold text-info">45,021</span>
          <span class="inline-block px-2 py-px ml-2 text-xs text-emerald-400 bg-emerald-100 rounded-md">
            +3.1%
          </span>
        </div>
        <div>
          <span>
            <svg
              class="w-12 h-12 "
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
              />
            </svg>
          </span>
        </div>
      </div>

      <!-- Tickets card -->
      <div class="flex items-center justify-between p-4 glass dark:glass-dark backdrop-blur-[40px] rounded-xl after:absolute after:top-0 after:right-0 after:m-2 after:p-2 after:rounded-full after:bg-danger">
        <div>
          <h6
            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-gray-300"
          >
            Tickets
          </h6>
          <span class="text-xl font-semibold text-danger">20,516</span>
          <span class="inline-block px-2 py-px ml-2 text-xs text-red-500 bg-red-100 rounded-md">
            -3.1%
          </span>
        </div>
        <div>
          <span>
            <svg
              class="w-12 h-12 "
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"
              />
            </svg>
          </span>
        </div>
      </div>
    </div>

    <!-- Charts -->
    <div class="grid grid-cols-1 py-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">
      <!-- Bar chart card -->
      <div class="col-span-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl" x-data="{ isOn: false }">
        <!-- Card header -->
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">Bar Chart</h4>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-gray-500 dark:text-gray-200">Last year</span>
            <button
              class="relative focus:outline-none"
              x-cloak
              @click="isOn = !isOn; updateBarChart(isOn)"
            >
              <div
                class="w-12 h-6 transition rounded-full outline-none bg-slate-300 bg-opacity-75"
              ></div>
              <div
                class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                :class="{ 'translate-x-0 bg-gray-500 dark:bg-white bg-opacity-50': !isOn, 'translate-x-6 bg-gray-500 dark:bg-white bg-opacity-50': isOn }"
              ></div>
            </button>
          </div>
        </div>
        <!-- Chart -->
        <div class="relative p-4 h-72">
          <canvas id="barChart"></canvas>
        </div>
      </div>

      <!-- Doughnut chart card -->
      <div class="glass dark:glass-dark backdrop-blur-[40px] rounded-xl" x-data="{ isOn: false }">
        <!-- Card header -->
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">Doughnut Chart</h4>
          <div class="flex items-center">
            <button
              class="relative focus:outline-none"
              x-cloak
              @click="isOn = !isOn; updateDoughnutChart(isOn)"
            >
              <div
                class="w-12 h-6 transition rounded-full outline-none bg-slate-300 bg-opacity-75"
              ></div>
              <div
                class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                :class="{ 'translate-x-0  bg-gray-500 dark:bg-white bg-opacity-50': !isOn, 'translate-x-6 bg-gray-500 dark:bg-white bg-opacity-50': isOn }"
              ></div>
            </button>
          </div>
        </div>
        <!-- Chart -->
        <div class="relative p-4 h-72">
          <canvas id="doughnutChart"></canvas>
        </div>
      </div>
    </div>

    <!-- Two grid columns -->
    <div class="grid grid-cols-1 py-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">
      <!-- Active users chart -->
      <div class="col-span-1 glass dark:glass-dark backdrop-blur-[40px] rounded-xl">
        <!-- Card header -->
        <div class="p-4 border-b border-opacity-10">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">Active users right now</h4>
        </div>
        <p class="p-4">
          <span class="text-2xl font-medium text-gray-500 dark:text-gray-200" id="usersCount">0</span>
          <span class="text-sm font-medium text-gray-500 dark:text-gray-200">Users</span>
        </p>
        <!-- Chart -->
        <div class="relative p-4">
          <canvas id="activeUsersChart"></canvas>
        </div>
      </div>

      <!-- Line chart card -->
      <div class="col-span-2 glass dark:glass-dark backdrop-blur-[40px] rounded-xl" x-data="{ isOn: false }">
        <!-- Card header -->
        <div class="flex items-center justify-between p-4 border-b">
          <h4 class="text-md font-bold text-gray-500 dark:text-gray-200">Line Chart</h4>
          <div class="flex items-center">
            <button
              class="relative focus:outline-none"
              x-cloak
              @click="isOn = !isOn; updateLineChart()"
            >
              <div
                class="w-12 h-6 transition rounded-full outline-none bg-slate-300 bg-opacity-75"
              ></div>
              <div
                class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                :class="{ 'translate-x-0  bg-gray-500 dark:bg-white bg-opacity-50': !isOn, 'translate-x-6 bg-gray-500 dark:bg-white bg-opacity-50': isOn }"
              ></div>
            </button>
          </div>
        </div>
        <!-- Chart -->
        <div class="relative p-4 h-72">
          <canvas id="lineChart"></canvas>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@section('scripting')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
  const updateBarChart = (on) => {
    const data = {
      data: randomData(),
      backgroundColor: '#BDFFEE',
    }
    if (on) {
      barChart.data.datasets.push(data)
      barChart.update()
    } else {
      barChart.data.datasets.splice(1)
      barChart.update()
    }
  }

  const updateDoughnutChart = (on) => {
    const data = random()
    // const color = 'rgb(207, 250, 254)'
    const color = colors.infoLight
    if (on) {
      doughnutChart.data.labels.unshift('Seb')
      doughnutChart.data.datasets[0].data.unshift(data)
      doughnutChart.data.datasets[0].backgroundColor.unshift(color)
      doughnutChart.update()
    } else {
      doughnutChart.data.labels.splice(0, 1)
      doughnutChart.data.datasets[0].data.splice(0, 1)
      doughnutChart.data.datasets[0].backgroundColor.splice(0, 1)
      doughnutChart.update()
    }
  }

  const updateLineChart = () => {
    lineChart.data.datasets[0].data.reverse()
    lineChart.update()
  }

  updateBarChart
  updateDoughnutChart
  updateLineChart
</script>
@endsection