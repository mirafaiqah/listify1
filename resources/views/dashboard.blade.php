<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #F5F5F5;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/5 bg-white h-screen shadow-lg">
            <div class="p-6">
                <h1 class="text-2xl font-bold text-pink-600">LISTIFY</h1>
            </div>
            <nav class="mt-10">
                <a class="flex items-center py-2 px-6 text-gray-700 bg-black text-white" href="/dashboard">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    DASHBOARD
                </a>
                <a class="flex items-center py-2 px-6 text-gray-700 hover:bg-gray-100" href="#">
                   <i class="fas fa-chart-line mr-3"></i>
                    ANALYTIC
                </a>
                <a class="flex items-center py-2 px-6 text-gray-700 hover:bg-gray-100" href="#">
                    <i class="fas fa-calendar-alt mr-3"></i>
                    CALENDAR
                </a>
                <a class="flex items-center py-2 px-6 text-gray-700 hover:bg-gray-100" href="/create">
                <i class="fas fa-tasks mr-3"></i>
                    TASK
                </a>

                <a class="flex items-center py-2 px-6 text-gray-700 hover:bg-gray-100" href="/tasks">
                    <i class="fas fa-file-alt mr-3"></i>
                    TO-DO LIST
                </a>
                <a class="flex items-center py-2 px-6 text-gray-700 hover:bg-gray-100" href="#">
                    <i class="fas fa-cog mr-3"></i>
                    SETTINGS
                </a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form" class="hidden">
                @csrf
                </form>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center py-2 px-6 text-gray-700 hover:bg-gray-100"> 
                <i class="fas fa-sign-out-alt mr-3"></i> 
                LOG OUT 
                </a>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="w-4/5 p-10">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-bold">Dashboard</h2>
                <div class="flex items-center">
                    <input class="border rounded-full py-2 px-4" placeholder="Search Task..." type="text"/>
                    <i class="fas fa-user-circle text-4xl text-gray-700 ml-4"></i>
                    <div class="ml-2">
                    <p class="text-gray-700">{{ $user->username }}</p> <!-- Use the registered username -->
                    <p class="text-gray-500 text-sm">{{ $user->user_type }}</p> <!-- Assuming you want to show user type -->
                    </div>
                </div>
            </div>
            <p class="text-gray-500 mb-6" id="currentDateTime"></p>

            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Worked This Week</h3>
                    <p class="text-xl text-gray-700 mt-2">40:00:05</p>
                    <i class="fas fa-clock text-4xl text-pink-600 mt-4"></i>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Project Worked</h3>
                    <p class="text-xl text-gray-700 mt-2">02</p>
                    <i class="fas fa-folder text-4xl text-pink-600 mt-4"></i>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold">Start Time Tracker</h3>
                    <i class="fas fa-play text-4xl text-pink-600 mt-4"></i>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg col-span-2">
                    <h3 class="text-2xl font-bold">Projects</h3>
                    <div class="mt-4 space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold">Project one</h4>
                                <p class="text-gray-500">00:40:00</p>
                            </div>
                            <div class="w-1/2 bg-gray-200 rounded-full h-2.5">
                                <div class="bg-pink-600 h-2.5 rounded-full" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold">Project Two</h4>
                                <p class="text-gray-500">00:10:00</p>
                            </div>
                            <div class="w-1/2 bg-gray-200 rounded-full h-2.5">
                                <div class="bg-pink-600 h-2.5 rounded-full" style="width: 10%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold">Project Three</h4>
                                <p class="text-gray-500">00:20:00</p>
                            </div>
                            <div class="w-1/2 bg-gray-200 rounded-full h-2.5">
                                <div class="bg-pink-600 h-2.5 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold">Project Four</h4>
                                <p class="text-gray-500">00:20:00</p>
                            </div>
                            <div class="w-1/2 bg-gray-200 rounded-full h-2.5">
                                <div class="bg-pink-600 h-2.5 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>
                    <a class="text-pink-600 text-right block mt-4" href="#">View All</a>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg col-span-1">
                    <h3 class="text-2xl font-bold">To Do</h3>
                    <div class="mt-4 space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold">Creating Wireframe</h4>
                                <p class="text-gray-500">00:40:00</p>
                            </div>
                            <div class="w-1/2 bg-gray-200 rounded-full h-2.5">
                                <div class="bg-pink-600 h-2.5 rounded-full" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="text-lg font-bold">Research Development</h4>
                                <p class="text-gray-500">00:20:00</p>
                            </div>
                            <div class="w-1/2 bg-gray-200 rounded-full h-2.5">
                                <div class="bg-pink-600 h-2.5 rounded-full" style="width: 20%"></div>
                            </div>
                        </div>
                    </div>
                    <a class="text-pink-600 text-right block mt-4" href="#">View Reports</a>
                </div>
            </div>
        </div>
    </div>
    <script>
    function updateDateTime() {
        const now = new Date();

        // Format date (e.g., Mon, 22 Jan 2024)
        const options = { weekday: 'short', year: 'numeric', month: 'short', day: 'numeric' };
        const date = now.toLocaleDateString('en-US', options);

        // Format time (e.g., 10:00 AM)
        const time = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit' });

        // Update the DOM
        document.getElementById('currentDateTime').textContent = ${date} | ${time};
    }

    // Update the date and time every second
    setInterval(updateDateTime, 1000);

    // Initialize on page load
    updateDateTime();
</script>

</body>
</html>