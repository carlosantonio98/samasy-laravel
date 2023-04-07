<aside id="sidebar" class="fixed z-20 h-full top-0 left-[-100%] lg:left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width ease-in-out duration-200">
    <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-white divide-y space-y-1">

                <!--===== Items list =====-->
                <ul class="space-y-2 pb-2">

                    @can('admin.home')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Dashboard" route="admin.home">
                                <x-slot name="svgpath">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan

                    @can('admin.types.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Types" route="admin.types.index" routePrefix="admin.types">
                                <x-slot name="svgpath">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan
                    
                    @can('admin.flavors.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Flavors" route="admin.flavors.index" routePrefix="admin.flavors">
                                <x-slot name="svgpath">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan

                    @can('admin.products.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Products" route="admin.products.index" routePrefix="admin.products">
                                <x-slot name="svgpath">
                                    <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan

                    @can('admin.expenses.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Expenses" route="admin.expenses.index" routePrefix="admin.expenses">
                                <x-slot name="svgpath">
                                    <path d="M20 7V5c0-1.103-.897-2-2-2H5C3.346 3 2 4.346 2 6v12c0 2.201 1.794 3 3 3h15c1.103 0 2-.897 2-2V9c0-1.103-.897-2-2-2zm-2 9h-2v-4h2v4zM5 7a1.001 1.001 0 0 1 0-2h13v2H5z"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan
                    
                    @can('admin.sales.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Sales" route="admin.sales.index" routePrefix="admin.sales">
                                <x-slot name="svgpath">
                                    <path d="M3 4v5h2V5h4V3H4a1 1 0 0 0-1 1zm18 5V4a1 1 0 0 0-1-1h-5v2h4v4h2zm-2 10h-4v2h5a1 1 0 0 0 1-1v-5h-2v4zM9 21v-2H5v-4H3v5a1 1 0 0 0 1 1h5zM2 11h20v2H2z"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan

                    @can('admin.stocks.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Stock" route="admin.stocks.index" routePrefix="admin.stocks">
                                <x-slot name="svgpath">
                                    <path d="M4 7h11v2H4zm0 4h11v2H4zm0 4h7v2H4zm15.299-2.708-4.3 4.291-1.292-1.291-1.414 1.415 2.706 2.704 5.712-5.703z"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan

                    @can('admin.users.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Users" route="admin.users.index" routePrefix="admin.users">
                                <x-slot name="svgpath">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan
                    
                    @can('admin.roles.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Roles" route="admin.roles.index" routePrefix="admin.roles">
                                <x-slot name="svgpath">
                                    <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm1.5 1H8c-3.309 0-6 2.691-6 6v1h15v-1c0-3.309-2.691-6-6-6z"></path><path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan
                        
                    @can('admin.permissions.index')
                        <!--===== Item =====-->
                        <li>
                            <x-aside-link label="Permissions" route="admin.permissions.index" routePrefix="admin.permissions">
                                <x-slot name="svgpath">
                                    <path d="M9.5 12c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm1.5 1H8c-3.309 0-6 2.691-6 6v1h15v-1c0-3.309-2.691-6-6-6z"></path><path d="M16.604 11.048a5.67 5.67 0 0 0 .751-3.44c-.179-1.784-1.175-3.361-2.803-4.44l-1.105 1.666c1.119.742 1.8 1.799 1.918 2.974a3.693 3.693 0 0 1-1.072 2.986l-1.192 1.192 1.618.475C18.951 13.701 19 17.957 19 18h2c0-1.789-.956-5.285-4.396-6.952z"></path>
                                </x-slot>
                            </x-aside-link>
                        </li>
                    @endcan

                </ul>

                <!--===== Extra item =====-->
                {{-- <div class="space-y-2 pt-2">

                    <x-aside-link label="Settings">
                        <x-slot name="svgpath">
                            <path d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z"></path>
                        </x-slot>
                    </x-aside-link>

                </div> --}}

            </div>
        </div>
    </div>
 </aside>