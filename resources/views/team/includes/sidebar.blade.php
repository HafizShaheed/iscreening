    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li class="menu-title">ALTBUSINESSINTEL TEAM</li>

                <li class="{{ $page == 'Dashboard' ? 'mm-active' : '' }}">
                    <a  href="{{ URL::to('/panel-team') }}" class="{{ $page == 'Dashboard' ? 'mm-active' : '' }}" aria-expanded="false">
                        <div class="menu-icon">

                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="">
                                <path
                                    d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>

                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
<!--

                <li>
                    <a href="{{ URL::to('/panel-team/report') }}" class="{{ $title == 'Reports Managment' ? 'mm-active' : '' }}"
                        aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.5096 2.53165H7.41104C5.50437 2.52432 3.94146 4.04415 3.89654 5.9499V15.7701C3.85437 17.7071 5.38979 19.3121 7.32671 19.3552C7.35512 19.3552 7.38262 19.3561 7.41104 19.3552H14.7343C16.6538 19.2773 18.1663 17.6915 18.1525 15.7701V7.36798L13.5096 2.53165Z"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M13.2688 2.52084V5.18742C13.2688 6.48909 14.3211 7.54417 15.6228 7.54784H18.1482"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.0974 14.0786H8.1474" stroke="#888888" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.2229 10.6388H8.14655" stroke="#888888" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="nav-text">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/panel-team/report/add') }}" class="{{ $title == 'Reports Managment' ? 'mm-active' : '' }}"
                        aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.5096 2.53165H7.41104C5.50437 2.52432 3.94146 4.04415 3.89654 5.9499V15.7701C3.85437 17.7071 5.38979 19.3121 7.32671 19.3552C7.35512 19.3552 7.38262 19.3561 7.41104 19.3552H14.7343C16.6538 19.2773 18.1663 17.6915 18.1525 15.7701V7.36798L13.5096 2.53165Z"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M13.2688 2.52084V5.18742C13.2688 6.48909 14.3211 7.54417 15.6228 7.54784H18.1482"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.0974 14.0786H8.1474" stroke="#888888" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.2229 10.6388H8.14655" stroke="#888888" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="nav-text">Entery Reports</span>
                    </a>
                </li> -->
                <li>
                    <a href="{{ URL::to('/panel-team/third-party') }}" class="{{ $title == 'Third-Party Managment' ? 'mm-active' : '' }}"
                        aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.79222 13.9396C12.1738 13.9396 15.0641 14.452 15.0641 16.4989C15.0641 18.5458 12.1931 19.0729 8.79222 19.0729C5.40972 19.0729 2.52039 18.5651 2.52039 16.5172C2.52039 14.4694 5.39047 13.9396 8.79222 13.9396Z"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.79223 11.0182C6.57206 11.0182 4.77173 9.21874 4.77173 6.99857C4.77173 4.7784 6.57206 2.97898 8.79223 2.97898C11.0115 2.97898 12.8118 4.7784 12.8118 6.99857C12.8201 9.21049 11.0326 11.0099 8.82064 11.0182H8.79223Z"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M15.1095 9.9748C16.5771 9.76855 17.7073 8.50905 17.7101 6.98464C17.7101 5.48222 16.6147 4.23555 15.1782 3.99997"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M17.0458 13.5045C18.4675 13.7163 19.4603 14.2149 19.4603 15.2416C19.4603 15.9483 18.9928 16.4067 18.2374 16.6936"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="nav-text">Third-Party List </span>
                    </a>
                </li>
<!--
                <li>
                    <a href="{{ URL::to('/company/entery-reports') }}" class="{{ $page == 'Entery Reports' ? 'mm-active' : '' }}" aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="">
                            <path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        </div>
                        <span class="nav-text">Entry Report</span>
                    </a>

                </li>



                <li>
                    <a href="{{ URL::to('/company/view-reports') }}" class="{{ $page == 'Vntery Reports' ? 'mm-active' : '' }}"
                        aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.5096 2.53165H7.41104C5.50437 2.52432 3.94146 4.04415 3.89654 5.9499V15.7701C3.85437 17.7071 5.38979 19.3121 7.32671 19.3552C7.35512 19.3552 7.38262 19.3561 7.41104 19.3552H14.7343C16.6538 19.2773 18.1663 17.6915 18.1525 15.7701V7.36798L13.5096 2.53165Z"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M13.2688 2.52084V5.18742C13.2688 6.48909 14.3211 7.54417 15.6228 7.54784H18.1482"
                                    stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.0974 14.0786H8.1474" stroke="#888888" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11.2229 10.6388H8.14655" stroke="#888888" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <span class="nav-text">View Reports</span>
                    </a>
                </li> -->


                <li class="menu-title"></li>

                <li>
                    <a href="{{route('team.logout')}}" class=""
                        aria-expanded="false">
                        <div class="menu-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.016 7.38948V6.45648C15.016 4.42148 13.366 2.77148 11.331 2.77148H6.45597C4.42197 2.77148 2.77197 4.42148 2.77197 6.45648V17.5865C2.77197 19.6215 4.42197 21.2715 6.45597 21.2715H11.341C13.37 21.2715 15.016 19.6265 15.016 17.5975V16.6545" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.8096 12.0214H9.76855" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.8813 9.10626L21.8093 12.0213L18.8813 14.9373" stroke="#888888" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                        </div>
                        <span class="nav-text">Logout</span>
                    </a>
                </li>



            </ul>

        </div>
    </div>
