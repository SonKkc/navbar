

    <div id="navbar"></div>

<script>
    function generateMenu(data) {
        var title = data.title;
        data.forEach(function(item){
            var mainTitle = item.title.replace(/\s+/g, '_');
        })

        var html = `
        <div x-data="{`;
            data.forEach(function(item) {
                // Thay thế dấu cách trong tên thuộc tính của item
                const itemTitleWithoutSpace = item.title.replace(/\s+/g, '_');
                html += ` ${itemTitleWithoutSpace}: false, ${itemTitleWithoutSpace}right: false,`;
                if (Array.isArray(item.items) && item.items.length > 0) {
                    html += ` ${itemTitleWithoutSpace}: false, ${itemTitleWithoutSpace}right: false,`;
                    item.items.forEach(function(subItem) {
                        // Thay thế dấu cách trong tên thuộc tính của subItem
                        const subItemTitleWithoutSpace = subItem.title.replace(/\s+/g, '_');
                        html += ` ${subItemTitleWithoutSpace}: false, ${subItemTitleWithoutSpace}right: false, `;
                    });
                }
            });
            html += `drawer: false, outsideClick:false, mainMenu: false, activeBtn: false, changeSvg: false}" class="relative">
            <div x-show="drawer" class="fixed left-0 w-full h-full z-20 bg-black opacity-50"></div>
            <div class="ralative">
                <!-- drawer init and toggle -->
                <div class="text-center">
                    <button @click="mainMenu = !mainMenu; drawer = !drawer; outsideClick = false"
                        class="flex justify-center font-medium text-sm w-full py-2.5"
                        type="button">
                        <svg class="w-12 h-12 text-gray-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill=""
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                        </svg>
                    </button>
                </div>

                <div x-show="drawer" @click.outside="`;
                    data.forEach(function(item) {
                        // Thay thế dấu cách trong tên thuộc tính của item
                        const itemTitleWithoutSpace = item.title.replace(/\s+/g, '_');
                        html += `${itemTitleWithoutSpace}= false; `;
                        if (Array.isArray(item.items) && item.items.length > 0) {
                            html += `${itemTitleWithoutSpace}= false; `;
                            item.items.forEach(function(subItem) {
                                // Thay thế dấu cách trong tên thuộc tính của subItem
                                const subItemTitleWithoutSpace = subItem.title.replace(/\s+/g, '_');
                                html += ` ${subItemTitleWithoutSpace}= false; `;
                            });
                        }
                    });

                    html += `drawer= false; mainMenu= false, activeBtn= null"
                    class="fixed top-0 left-0 z-40 h-screen overflow-hidden w-80">
                            <div x-show="mainMenu" x-transition:enter="transition ease-in-out duration-200 opacity-100 transform"
                                x-transition:enter-start="-translate-x-full" x-transition:enter-end=" translate-x-0"
                                x-transition:leave="transition ease-in-out duration-300 transform"
                                x-transition:leave-start="translate-x-0" x-transition:leave-end=" -translate-x-full"
                                class="absolute h-screen px-4  transition-transform w-80 bg-white border-r border-gray-300 shadow-lg "
                                tabindex="-1">
                                <div class="fixed top-2 right-0 text-left w-16 z-[41]">
                                    <button type="button" @click="mainMenu = !mainMenu; drawer = !drawer"
                                        class="text-white bg-transparent rounded-lg text-sm w-8 h-8 inline-flex items-center justify-center">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="overflow-y-auto">
                                    <ul class="font-medium divide-y divide-solid py-2">`;
                                        data.forEach(function(item) {
                                        html += `
                                            <li class="py-2">
                                                ${Array.isArray(item.items) && item.items.length > 0 ? `
                                                    <button @click="${item.title} = !${item.title}; ${item.title}right = true; mainMenu = !mainMenu;"
                                                        class="flex justify-between w-full p-2 rounded-lg text-gray-700 ">
                                                        <div class="flex items-center">
                                                            <span class="ms-3">${item.title}</span>
                                                        </div>
                                                        ${Array.isArray(item.items) && item.items.length > 0 ? `
                                                            <svg class="w-6 h-6 inline-block text-gray-700 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
                                                            </svg>` : ''}
                                                    </button>` : `
                                                    <a href="${item.url}" class="flex justify-between w-full p-2 rounded-lg text-gray-700">
                                                        <div class="flex items-center">
                                                            <span class="ms-3">${item.title}</span>
                                                        </div>
                                                        ${Array.isArray(item.items) && item.items.length > 0 ? `
                                                            <svg class="w-6 h-6 inline-block text-gray-700 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
                                                            </svg>` : ''}
                                                    </a>`}
                                            </li>`;
                                    });
                                html += `
                                    </ul>
                                </div>
                            </div>`;

                            // Hiển thị dữ liệu của subItem
                            data.forEach(function(item){
                                if (Array.isArray(item.items) && item.items.length > 0) {
                                const itemTitleWithoutSpace = item.title.replace(/\s+/g, '_');
                                html += `
                                <div x-show="${itemTitleWithoutSpace}"
                                    x-transition:enter="transition ease-out duration-300 transform"
                                    x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                    x-transition:leave="transition ease-in duration-100 delay-[290ms] transform"
                                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                                    class="absolute top-0 inset-0 z-40 h-screen overflow-y-auto transition-transform w-80">
                                    <div x-show="${itemTitleWithoutSpace}right" x-transition:enter="transition ease-out duration-300 transform"
                                        x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                        x-transition:leave="transition ease-in duration-100 transform"
                                        x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                                        class="absolute top-0 inset-0 z-40 h-screen overflow-y-auto transition-transform duration-300 bg-white">
                                        <div class="flex items-center justify-center text-center bg-[#FBF4E8] w-full h-16 border-b border-gray-200 relative">
                                            <button type="button" @click="${itemTitleWithoutSpace} = !${itemTitleWithoutSpace}; ${itemTitleWithoutSpace}right = !${itemTitleWithoutSpace}right; mainMenu = !mainMenu"
                                                class="absolute top-1/4 left-0 text-gray-500 bg-transparent rounded-lg text-sm w-8 h-8 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="m15 19-7-7 7-7" />
                                                </svg>
                                                <span class="sr-only">Close menu</span>
                                            </button>
                                            <h5 class="flex-1 text-base font-semibold uppercase text-gray-500">
                                                ${item.title}
                                            </h5>

                                        </div>
                                        <div class="px-4">
                                            <ul class="font-medium divide-y divide-solid py-2">
                                                ${item.items.map((subItem, index) => `
                                                    <li key="${itemTitleWithoutSpace}_subItem_${index}" class="font-medium divide-y divide-solid py-2">
                                                        ${Array.isArray(subItem.items) && subItem.items.length > 0 ? `
                                                            <button type="button" @click="${subItem.title.replace(/\s+/g,'_')} = !${subItem.title.replace(/\s+/g,'_')}; ${subItem.title.replace(/\s+/g,'_')}right = true"
                                                                class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                                                                <span class="">${subItem.title}</span>
                                                                ${Array.isArray(subItem.items) && subItem.items.length > 0 ? `
                                                                    <svg class="w-6 h-6 inline-block ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
                                                                    </svg>` : ''}
                                                            </button>` : `
                                                            <a href="${subItem.url}" class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                                                                <span class="">${subItem.title}</span>
                                                                ${Array.isArray(subItem.items) && subItem.items.length > 0 ? `
                                                                    <svg class="w-6 h-6 inline-block ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m9 5 7 7-7 7"/>
                                                                    </svg>` : ''}
                                                            </a>`}
                                                    </li>
                                                `).join('')}
                                            </ul>
                                        </div>
                                    </div>
                                </div>`;
                                }
                            })

                            data.forEach(function(item){
                                if(Array.isArray(item.items) && item.items.length>0){
                                    item.items.forEach(function(subItem){
                                        if(Array.isArray(subItem.items) && subItem.items.length>0){
                                            const subItemTitleWithoutSpace = subItem.title.replace(/\s+/g, '_');
                                            html += `
                                            <div x-show="${subItemTitleWithoutSpace}"
                                                x-transition:enter="transition ease-out duration-300 transform"
                                                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                                x-transition:leave="transition ease-in duration-100 delay-[290ms] transform"
                                                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                                                class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80"
                                                tabindex="-1">
                                                <div x-show="${subItemTitleWithoutSpace}right"
                                                x-transition:enter="transition ease-in-out duration-100 transform opacity-100"
                                                x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                                                x-transition:leave="transition ease-in-out duration-200 transform"
                                                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                                                class="absolute top-0 right-0 z-40 h-screen overflow-y-auto transition-transform w-80 bg-white">
                                                    <div class="flex items-center justify-center text-center bg-[#C1F1A1] w-full h-16 border-b border-gray-200 relative">
                                                        <h5 class="text-base font-semibold uppercase text-gray-500">
                                                            ${subItem.title}
                                                        </h5>
                                                        <button type="button" @click="${subItemTitleWithoutSpace} = !${subItemTitleWithoutSpace}; ${subItemTitleWithoutSpace}right = !${subItemTitleWithoutSpace}right"
                                                            class="absolute top-1/4 left-0 text-gray-500 bg-transparent rounded-lg text-sm w-8 h-8 flex items-center justify-center">
                                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                    d="m15 19-7-7 7-7" />
                                                            </svg>
                                                            <span class="sr-only">Close menu</span>
                                                        </button>
                                                    </div>
                                                    <div class=px-4>
                                                        <ul class="font-medium divide-y divide-solid py-2">
                                                            ${subItem.items.map((subSubItem, index) => `
                                                                <li key="${subItemTitleWithoutSpace}_subSubItem_${index}" class="font-medium divide-y divide-solid py-2">
                                                                    ${Array.isArray(subSubItem.items) && subSubItem.items.length > 0 ? `
                                                                        <button type="button" class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                                                                            <span class="">${subSubItem.title}</span>
                                                                        </button>` : `
                                                                        <a href="${subSubItem.url}" class="flex justify-between w-full p-2 text-left rounded-lg text-gray-700">
                                                                            <span class="">${subSubItem.title}</span>
                                                                        </a>`
                                                                    }
                                                                </li>
                                                            `).join('')}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>`;
                                        }
                                    })
                                }
                            })
        html += `</div>
            </div>
        </div>`;

        return html;
    }

    $(document).ready(function () {
    $.ajax({
        url: '/getMenuData',
        type: 'GET',
        success: function (data) {
            // console.log(data);

            // data.forEach(function(item) {
            //     console.log('Data for ' + item.title + ':');
            //     // Kiểm tra xem có thuộc tính 'items' không và hiển thị dữ liệu nếu có
            //     if (Array.isArray(item.items) && item.items.length > 0) {
            //         console.log('Data for ' + item.title + ':');
            //         item.items.forEach(function(subItem) {
            //             console.log('SubItem for ' + item.title + ':');
            //             console.log(subItem);
            //             // Kiểm tra xem có thuộc tính 'subItems' không và hiển thị dữ liệu nếu có
            //             if (Array.isArray(subItem.items) && subItem.items.length > 0) {
            //                 console.log('Data for subItems:');
            //                 subItem.items.forEach(function(subSubItem) {
            //                     console.log(subSubItem);
            //                 });
            //             }
            //         });
            //     }
            // });

            var menu = generateMenu(data);
            $('#navbar').html(menu);
        },
        error: function (error) {
            console.log(error);
        }
    });
});
</script>
<?php /**PATH /var/www/html/resources/views/components/navbar.blade.php ENDPATH**/ ?>