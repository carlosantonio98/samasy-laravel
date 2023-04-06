
<x-app-layout>
    <div class="container mx-auto">
        
        <div class="flex justify-between items-center mb-5">
            <h3 class="font-bold text-lg py-4">Dashboard</h3>
        </div>

        <div class="grid xl:grid-cols-3 gap-4">
            <div class="xl:col-span-2">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-5">
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 flex justify-between bg-white">
                        <div>
                            <p class="text-gray-500">Total money</p>
                            <p class="text-xl font-bold">$ {{ $totalMoney }}</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.148 2.971A2.008 2.008 0 0 0 17.434 2H6.566c-.698 0-1.355.372-1.714.971L2.143 7.485A.995.995 0 0 0 2 8a3.97 3.97 0 0 0 1 2.618V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.382A3.97 3.97 0 0 0 22 8a.995.995 0 0 0-.143-.515l-2.709-4.514zm.836 5.28A2.003 2.003 0 0 1 18 10c-1.103 0-2-.897-2-2 0-.068-.025-.128-.039-.192l.02-.004L15.22 4h2.214l2.55 4.251zM10.819 4h2.361l.813 4.065C13.958 9.137 13.08 10 12 10s-1.958-.863-1.993-1.935L10.819 4zM6.566 4H8.78l-.76 3.804.02.004C8.025 7.872 8 7.932 8 8c0 1.103-.897 2-2 2a2.003 2.003 0 0 1-1.984-1.749L6.566 4zM10 19v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.142c.321.083.652.142 1 .142a3.99 3.99 0 0 0 3-1.357c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357A3.99 3.99 0 0 0 18 12c.348 0 .679-.059 1-.142V19h-3z" fill="#3798A6"></path></svg>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 flex justify-between bg-white">
                        <div>
                            <p class="text-gray-500">Number of sales</p>
                            <p class="text-xl font-bold">{{ $amountSales }}</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z" fill="#3798A6"></path>
                                <path d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" fill="#3798A6"></path>
                                <path d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" fill="#3798A6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 flex justify-between bg-white">
                        <div>
                            <p class="text-gray-500">Number of sales by day</p>
                            <p class="text-xl font-bold">{{ $amountSalesByDay }}</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M22 7.999a1 1 0 0 0-.516-.874l-9.022-5a1.003 1.003 0 0 0-.968 0l-8.978 4.96a1 1 0 0 0-.003 1.748l9.022 5.04a.995.995 0 0 0 .973.001l8.978-5A1 1 0 0 0 22 7.999zm-9.977 3.855L5.06 7.965l6.917-3.822 6.964 3.859-6.918 3.852z" fill="#3798A6"></path>
                                <path d="M20.515 11.126 12 15.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" fill="#3798A6"></path>
                                <path d="M20.515 15.126 12 19.856l-8.515-4.73-.971 1.748 9 5a1 1 0 0 0 .971 0l9-5-.97-1.748z" fill="#3798A6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 flex justify-between bg-white">
                        <div>
                            <p class="text-gray-500">Number of products</p>
                            <p class="text-xl font-bold">{{ $amountProducts }}</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z" fill="#3798A6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 flex justify-between bg-white">
                        <div>
                            <p class="text-gray-500">Number of types</p>
                            <p class="text-xl font-bold">{{ $amountTypes }}</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z" fill="#3798A6"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 flex justify-between bg-white">
                        <div>
                            <p class="text-gray-500">Number of flavor</p>
                            <p class="text-xl font-bold">{{ $amountFlavors }}</p>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                <path d="M4 6h2v2H4zm0 5h2v2H4zm0 5h2v2H4zm16-8V6H8.023v2H18.8zM8 11h12v2H8zm0 5h12v2H8z" fill="#3798A6"></path>
                            </svg>
                        </div>
                    </div>
                </div>
    
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 mb-5 bg-white">
                    <p class="font-bold mb-4">Sales by months</p>
                    <div class="h-[300px]" id="chartOne"></div>
                </div>

                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 mb-5 bg-white">
                    <p class="font-bold mb-4">Latest sales</p> 
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">PRODUCT</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">PRICE</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">TYPE</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">FLAVOR</th>
                                <th scope="col" class="px-6 py-4 font-medium text-gray-900">CREATED AT</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
        
                            @forelse ($sales as $sale)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $sale->product->name }}</td>
                                    <td class="px-6 py-4">{{ $sale->product->price }}</td>
                                    <td class="px-6 py-4">{{ $sale->product->type->name }}</td>
                                    <td class="px-6 py-4">{{ $sale->product->flavor->name }}</td>
                                    <td class="px-6 py-4">{{ $sale->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="5" class="px-6 py-4">Sin registros</td>
                                </tr>
                            @endforelse
        
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 mb-5 bg-white">
                    <p class="font-bold mb-4">Sales by products</p>
                    <div id="chartTwo"></div>
                </div>
                <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md w-full p-6 mb-5 bg-white">
                    <p class="font-bold mb-4">Earning Reports</p>
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <div class="mb-3">
                                <div id="chartThree"></div>
                            </div>
                            <p class="text-gray-500 mb-2">Month money</p>
                            <h5 class="text-xl font-bold">$ {{ $monthMoney }}</h5>
                        </div>
                        <div>
                            <div class="mb-3">
                                <div id="chartFour"></div>
                            </div>
                            <p class="text-gray-500 mb-2">Day money</p>
                            <h5 class="text-xl font-bold">$ {{ $dayMoney }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>

    const chartOneDatas = {!! $chartOne !!};
    
    const chartOneOptions = {
        chart: {
            type: 'line',
            height: 300
        },
        stroke: {
            show: true,
            curve: 'smooth',
            lineCap: 'butt',
            width: 3,
            dashArray: 0,      
        },
        series: [ chartOneDatas.series ],
        xaxis: {
            categories: chartOneDatas.categories
        }
    }

    const chartOne = new ApexCharts(document.querySelector("#chartOne"), chartOneOptions);

    chartOne.render();

    const chartTwoDatas = {!! $chartTwo !!};

    const chartTwoOptions = {
        series: chartTwoDatas.series,
        chart: {
            type: 'donut',
            labels: false,
        },
        responsive: [
            {
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        ],
        labels: chartTwoDatas.labels,
        dataLabels: {
            enabled: false
        },
    };

    const chartTwo = new ApexCharts(document.querySelector("#chartTwo"), chartTwoOptions);
    
    chartTwo.render();

    const chartThreeOptions = {
        series: [70],
        chart: {
            type: 'radialBar'
        },
        plotOptions: {
            radialBar: {
                
                hollow: {
                    size: '50%',
                },
                dataLabels: {
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round'
        },
        colors: [ '#3798A6' ],
    };

    const chartThree = new ApexCharts(document.querySelector("#chartThree"), chartThreeOptions);
    
    chartThree.render(); 
    
    const chartFourOptions = {
        series: [40],
        chart: {
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '50%',
                },
                dataLabels: {
                    name: {
                        show: false
                    },
                    value: {
                        show: false
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round'
        },
    };

    const chartFour = new ApexCharts(document.querySelector("#chartFour"), chartFourOptions);
    
    chartFour.render();

</script>