<div id="addOfficer" class="show fade" >
  <div style="max-width: 400px" class="flex px-4 mx-auto overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
        <!-- <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>s -->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all">
            <div class="bg-white px-3 py-5 md:p-5 lg:px-5 mx-5 my-3 overflow-auto example custom-xl" style="max-width: 500px;">
                <div class="flex justify-between items-center pb-8">
                    <h1 class="font-semibold text-gray-600 text-xl">Update officer</h1>
                    <a href="../officers">
                        <i class="fas fa-close text-gray-300 cursor-pointer"></i>
                    </a>
                </div>
                <div class="overflow-y-auto example" style="height: 470px">
                    <form action="../officers/process.php" method="post" class="space-y-2 text-sm md:text-base lg:text-base" enctype="multipart/form-data">
                        <div class="flex justify-center">
                            <div class="space-y-4 relative">
                                <div class="rounded-full overflow-hidden" style="width: 140px; height: 140px;">
                                    <!-- <img 
                                            style="object-fit: cover; width: 100%; height: 100%"
                                                src="../images/user1.png"
                                                name="picture"
                                                onClick="triggerClick()" 
                                                id="profileDisplay"
                                            > -->
                                        <img class="h-10 w-10 rounded-full" src="../images/user1.png" alt="" style="object-fit: cover; width: 100%; height: 100%" name="picture" onClick="triggerClick()" id="profileDisplay">
                                </div>
                                <div class="absolute top-3 opacity-0">
                                    <input type="file" name="profileImage" class="py-8" onChange="displayImage(this)" id="profileImage">
                                </div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm">Name <span class="text-red-500">*</span></p>
                            <input type="text" value="" autocomplete="off" name="name" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>
                        <!-- <div class="flex"> -->
                            <div class="space-y-2">
                                <p class="text-sm">Course<span class="text-red-500">*</span></p>
                                <select class="rounded" name="course" style="padding: 9px; width: 100%; background:#F3F4F6; font-size: 16px " required>
                                    <option class="text-sm" value="BS Automotive Technology">BS Automotive Technology</option>
                                    <option class="text-sm" value="BS Electrical Technology">BS Electrical Technology</option>
                                    <option class="text-sm" value="BS Entrepreneurship">BS Entrepreneurship</option>
                                    <option class="text-sm" value="BS Electronic Techonology">BS Electronic Techonology</option>
                                    <option class="text-sm" value="BS Food Technology">BS Food Technology</option>
                                    <option class="text-sm" value="BS Mechanical Technology">BS Mechanical Technolog</option>
                                    <option class="text-sm" value="BSEd Math">BSEd Math</option>
                                    <option class="text-sm" value="BSEd English">BSEd English</option>
                                    <option class="text-sm" value="BEEd">BEEd</option>
                                    <option class="text-sm" value="BTLEd Information Communication Technology">BTLEd ICT</option>
                                    <option class="text-sm" value="BTLEd Home Economics">BTLEd Home Economics</option>
                                    <option class="text-sm" value="BS Computer Engineering">BS Computer Engineering</option>
                                    <option class="text-sm" value="BS Computer Science">BS Computer Science</option>
                                    <option class="text-sm" value="BS Electronic Engineering">BS Electronic Engineering</option>
                                    <option class="text-sm" value="BS Information System">BS Information System</option>
                                    <option class="text-sm" value="BS Information Technology">BS Information Technology</option>
                                    <option class="text-sm" value="BS Information Technology (Animation)">BS-IT (Animation)</option>
                                </select>
                            </div>
                            <div class="flex items-center gap-3 w-full">
                                <div class="space-y-2 w-full">
                                    <p class="text-sm">Year Level <span class="text-red-500"></span></p>
                                    <select class="rounded" name="yearLevel" style="padding: 9px; width: 100%; background:#F3F4F6 " required>
                                        <option value="1st Year">1st Year</option>
                                        <option value="2nd Year">2nd Year</option>
                                        <option value="3rd Year">3rd Year</option>
                                        <option value="4th Year">4th Year</option>
                                    </select>
                                </div>
                                <div class="space-y-2 w-full">
                                    <p class="text-sm">Position<span class="text-red-500"></span></p>
                                    <select class="rounded" name="position" style="padding: 9px; width: 100%; background:#F3F4F6 " required>
                                        <option value="President">President</option>
                                        <option value="Vice President">Vice President</option>
                                        <option value="Secretary">Secretary</option>
                                        <option value="Treasurer">Treasurer</option>
                                        <option value="Auditor">Auditor</option>
                                        <option value="Business Manager">Business Manager</option>
                                        <option value="P.I.O">P.I.O</option>
                                        <option value="Representative">Representative</option>
                                    </select>
                                </div>
                            </div>
                      
                        <div class="space-y-2">
                            <p class="text-sm">BU Email <span class="text-red-500">*</span></p>
                            <input type="text" value="" autocomplete="off" name="buEmail" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>
                        <div class="space-y-2">
                            <p class="text-sm">Facebook<span class="text-red-500">*</span></p>
                            <input type="text" value="" autocomplete="off" name="fb" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                        </div>
                          <div class="flex gap-3">
                            <div class="space-y-2">
                                <p class="text-sm">Username<span class="text-red-500">*</span></p>
                                <input type="text" value="" autocomplete="off" name="username" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">Password<span class="text-red-500">*</span></p>
                                 <input type="text" value="" autocomplete="off" name="password" class="bg-gray-100 focus:outline-none border-none focus:bg-gray-200 rounded py-2 px-2 text-gray-500 w-full">
                             </div>
                        </div>
                        <div class="flex justify-center">
                            <div style="font-size: 14px">
                                <a href="../officers" class="px-6 py-2 bg-gray-100 rounded text-gray-500">
                                    Cancel
                                </a>
                                <button class="relative px-6 bg-yellow-500 hover:bg-yellow-400 py-2 text-white rounded ml-3" name="add" type="submit" onclick="this.classList.toggle('button--loading')">
                                    <span class="button-text">Submit</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>