<x-admin-layout>
    <div class="mrsmart-container py-12">
        <div class=" site-settings-page">

            <h1>Site Settings</h1>

            <hr>

            <div class="settings">

                <div class="mono-settings">
                    <div class="setting">
                        <p class="name">Name</p>
                        <p class="value">{{ $siteInfo->name }}</p>
                    </div>

                    <div class="setting">
                        <p class="name">Location</p>
                        <p class="value">{{ $siteInfo->location }}</p>
                    </div>

                    <div class="setting">
                        <p class="name">Email</p>
                        <p class="value">{{ $siteInfo->email }}</p>
                    </div>

                    <div class="setting">
                        <p class="name">Phone</p>
                        <p class="value">{{ $siteInfo->phone }}</p>
                    </div>
                </div>


                <div class="group-settings">
                    <div class="settings-group">
                        <h3>Operating Days</h3>
                        <div class="setting">
                            <p class="name">From</p>
                            <p class="value">{{ $siteInfo->operation_day_from }}</p>
                        </div>
                        <div class="setting">
                            <p class="name">To</p>
                            <p class="value">{{ $siteInfo->operation_day_to }}</p>
                        </div>
                    </div>

                    <div class="settings-group" x-data="{ hourFrom: false ,hourTo: false}">
                        <h3>Operating Hours</h3>
                        <div class="setting">
                            <p class="name">From</p>
                            <p class="value" @click="hourFrom = true" @click.outside="hourFrom = false">
                                <span x-show="! hourFrom">{{ $siteInfo->operation_time_from }}</span>
                                <input type="text" x-cloak x-show="hourFrom"
                                    value="{{ $siteInfo->operation_time_from }}">
                            </p>
                        </div>
                        <div class="setting">
                            <p class="name">To</p>
                            <p class="value" @click="hourTo = true" @click.outside="hourTo = false">
                                <span x-show="! hourTo">{{ $siteInfo->operation_time_to }}</span>
                                <input type="text" x-cloak x-show="hourTo" value="{{ $siteInfo->operation_time_to }}">
                                {{-- <button wire:click="update('operation_time_to')" x-show="hourTo"
                                    class="bg-accent w-5 h-5 flex justify-center items-center text-white">*</button> --}}
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</x-admin-layout>
