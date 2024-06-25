<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <!-- Profile Section -->
    <div class="flex items-center space-x-4">
        <img src="{{ asset('img/fahmi.jpg') }}" alt="" class="w-24 h-24 rounded-full">
        <div>
            <h1 class="text-3xl font-bold">Muhamad Fahmi Aulia Noor</h1>
            <p class="text-gray-600">Junior Full Stack Developer</p>
            <p class="text-gray-600">Email: fahmianoor12@gmail.com | WhatsApp: +62 85221717270</p>
        </div>
    </div>

    <!-- Experience Section -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold">Experience</h2>
        <div class="mt-4">
            <h3 class="text-xl font-semibold">Freelance Junior Web Developer</h3>
            <p class="text-gray-600">2022 - Now</p>
            <ul class="list-disc list-inside">
                <li>Create Web Company Porfile Alter English</li>
                <li>Create Web Company Profile Fanz Garage</li>
            </ul>
        </div>
    </div>

    <!-- Education Section -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold">Education</h2>
        <div class="mt-4">
            <h3 class="text-xl font-semibold">Informatic Enginering</h3>
            <p class="text-gray-600">High School Taruna Ganesha, 2017 - 2020</p>
            <p class="text-gray-600">Collage of Technology Cipasung, 2022 - Now</p>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold">Skills</h2>
        <div class="flex flex-wrap mt-4">
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Laravel</span>
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">HTML/CSS</span>
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">MySQL</span>
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Git</span>
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">GitHub</span>
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Chat GPT</span>
            <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Canva</span>
        </div>
    </div>
</div>
</x-layout>