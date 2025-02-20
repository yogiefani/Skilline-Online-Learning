<section class="bg-white py-20">
    <div class="max-w-[90%] mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                <span class="text-[#2F327D]">What is</span>
                <span class="text-orange-500">Skilline?</span>
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Skilline is a platform that allows educators to create online classes whereby they can 
                store the course materials online; manage assignments, quizzes and exams; monitor 
                due dates; grade results and provide students with feedback all in one place.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="relative group overflow-hidden rounded-2xl">
                <div class="relative h-[300px]">
                    <img 
                        src="{{ asset('images/instructor.jpg') }}" 
                        alt="For Instructors" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-black bg-opacity-40 transition-all duration-300 group-hover:bg-opacity-30"></div>
                </div>
                

                <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                    <h3 class="text-2xl font-bold mb-4">FOR INSTRUCTORS</h3>
                    <button class="border-2 border-white px-6 py-2 rounded-full hover:bg-white hover:text-gray-900 transition-all duration-300">
                        Start a class today
                    </button>
                </div>
            </div>

            <div class="relative group overflow-hidden rounded-2xl">
                <div class="relative h-[300px]">
                    <img 
                        src="{{ asset('images/students.jpg') }}" 
                        alt="For Students" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute inset-0 bg-black bg-opacity-40 transition-all duration-300 group-hover:bg-opacity-30"></div>
                </div>
                
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white">
                    <h3 class="text-2xl font-bold mb-4">FOR STUDENTS</h3>
                    <button class="bg-[#00CBF8] px-6 py-2 rounded-full hover:bg-[#23d3fd] transition-all duration-300">
                        Enter access code
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>