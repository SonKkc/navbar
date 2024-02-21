{{-- navbar --}}
<div class="fixed left-24 top-0 w-full ">
    <div class="h-[70px] py-2.5 px-2.5 border-b border-gray-300">
        <div class="flex justify-between items-center">
            <div class="ps-24 w-36 h-full bg-red-700 text-center">
                <p>Logo</p>
            </div>
        </div>
    </div>
</div>
{{-- sidebar --}}
<div class="w-24 fixed left-0 top-0 h-screen border-r border-gray-300">
    <div id="navbar"></div>
</div>


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
            html += `drawer: false, outsideClick:false, mainMenu: false}" class="relative">
            <div x-show="drawer" class="fixed left-24 w-full h-full z-20 bg-black opacity-50"></div>
            <div class="ralative">
                <!-- drawer init and toggle -->
                <div class="text-center">
                    <button @click="mainMenu = !mainMenu; drawer = !drawer; outsideClick = false"
                        class="flex justify-center fill-gray-700 hover:fill-gray-400 font-medium text-sm w-full py-2.5"
                        type="button">
                        <svg class="w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
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

                    html += `drawer= false; mainMenu= false"
                    class="fixed top-0 left-24 z-40 h-screen overflow-hidden w-80">
                            <div x-show="mainMenu" x-transition:enter="transition ease-in-out duration-200 opacity-100 transform"
                                x-transition:enter-start="-translate-x-full" x-transition:enter-end=" translate-x-0"
                                x-transition:leave="transition ease-in-out duration-300 transform"
                                x-transition:leave-start="translate-x-0" x-transition:leave-end=" -translate-x-full"
                                class="absolute h-screen p-4 overflow-y-auto transition-transform w-80 bg-gray-800 border-r border-gray-700 shadow-lg "
                                tabindex="-1">

                                <h5 id="drawer-disable-body-scrolling-label" class="text-base font-semibold uppercase text-gray-400">
                                    Main Menu
                                </h5>
                                <button type="button" @click="mainMenu = !mainMenu; drawer = !drawer"
                                    class="text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center hover:bg-gray-600 hover:text-white">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                                <div class="py-4 overflow-y-auto">
                                    <ul class="space-y-2 font-medium">`;
                                    data.forEach(function(item) {
                                        html += `
                                            <li>
                                                <button @click="${Array.isArray(item.items) && item.items.length > 0 ? `${item.title} = !${item.title}; ${item.title}right = true; mainMenu = !mainMenu;` : ''}"
                                                    class="flex justify-between w-full p-2 rounded-lg text-white hover:bg-gray-100 hover:bg-gray-700 group">
                                                    <div class="flex items-center">
                                                        <svg class="w-5 h-5 transition duration-75 text-gray-400 group-hover:text-white"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 22 21">
                                                            <path
                                                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                                            <path
                                                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                                        </svg>
                                                        <span class="ms-3">${item.title}</span>
                                                    </div>`;
                                        html += Array.isArray(item.items) && item.items.length > 0 ? `
                                                    <svg class="w-6 h-6 inline-block ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                                    </svg>` : '';
                                        html += `
                                                </button>
                                            </li>`;
                                    });
                                html += `
                                    </ul>
                                </div>
                            </div>`;

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
                                        class="absolute top-0 inset-0 z-40 h-screen p-4 overflow-y-auto transition-transform duration-300 bg-gray-700">
                                        <h5 id="drawer-disable-body-scrolling-label"
                                            class="text-base font-semibold uppercase text-gray-400">
                                            ${item.title}</h5>
                                        <button type="button" @click="${itemTitleWithoutSpace} = !${itemTitleWithoutSpace}; ${itemTitleWithoutSpace}right = !${itemTitleWithoutSpace}right; mainMenu = !mainMenu"
                                            class="text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m15 19-7-7 7-7" />
                                            </svg>
                                            <span class="sr-only">Close menu</span>
                                        </button>
                                        <ul class="space-y-2 font-medium">
                                            ${item.items.map((subItem, index) => `
                                                <li key="${itemTitleWithoutSpace}_subItem_${index}">
                                                    <button type="button" @click="${subItem.title.replace(/\s+/g,'_')} = !${subItem.title.replace(/\s+/g,'_')}; ${subItem.title.replace(/\s+/g,'_')}right = true"
                                                        class="flex justify-between w-full p-2 text-left rounded-lg text-white hover:bg-gray-400">
                                                        <span class="">${subItem.title}</span>
                                                        ${Array.isArray(subItem.items) && subItem.items.length > 0 ? `
                                                            <svg class="w-6 h-6 inline-block ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                                            </svg>` : ''}
                                                    </button>
                                                </li>
                                            `).join('')}
                                        </ul>
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
                                                    class="absolute top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform w-80 bg-stone-500">
                                                    <h5 id="drawer-disable-body-scrolling-label" class="text-base font-semibold uppercase text-white">
                                                        ${subItem.title}</h5>
                                                    <button type="button" @click="${subItemTitleWithoutSpace} = !${subItemTitleWithoutSpace}; ${subItemTitleWithoutSpace}right = !${subItemTitleWithoutSpace}right"
                                                        class="text-white bg-transparent rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center hover:bg-gray-600 hover:text-white">
                                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="m15 19-7-7 7-7" />
                                                        </svg>
                                                        <span class="sr-only">Close menu</span>
                                                    </button>

                                                    <ul class="space-y-2 font-medium">
                                                        ${subItem.items.map((subSubItem, index) => `
                                                            <li key="${subItemTitleWithoutSpace}_subSubItem_${index}">
                                                                <button type="button" class="flex justify-between w-full p-2 text-left rounded-lg text-white hover:bg-gray-400">
                                                                    <span class="">${subSubItem.title}</span>
                                                                </button>
                                                            </li>
                                                        `).join('')}
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
            console.log(data);

            data.forEach(function(item) {
                console.log('Data for ' + item.title + ':');
                // Kiểm tra xem có thuộc tính 'items' không và hiển thị dữ liệu nếu có
                if (Array.isArray(item.items) && item.items.length > 0) {
                    console.log('Data for ' + item.title + ':');
                    item.items.forEach(function(subItem) {
                        console.log('SubItem for ' + item.title + ':');
                        console.log(subItem);
                        // Kiểm tra xem có thuộc tính 'subItems' không và hiển thị dữ liệu nếu có
                        if (Array.isArray(subItem.items) && subItem.items.length > 0) {
                            console.log('Data for subItems:');
                            subItem.items.forEach(function(subSubItem) {
                                console.log(subSubItem);
                            });
                        }
                    });
                }
            });

            var menu = generateMenu(data);
            $('#navbar').html(menu);
        },
        error: function (error) {
            console.log(error);
        }
    });
});
</script>
