<div class="grid grid-cols-1 gap-x-5 lg:grid-cols-12">
  <div class="lg:col-span-12">
    <div class="-ml-4 -mr-8 rounded-lg card">
      <div class="card-body">
        <h6 class="mb-4 text-15">Member Information</h6>
        <div class="overflow-x-auto">
            <table class="w-full ltr:text-left rtl:ext-right">
              <tbody>
                <tr>
                  <th class="font-semibold ps-0" scope="row">Sponsor</th>
                  <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->sponsorName }}</td>
                </tr>
                <tr>
                  <th class="font-semibold ps-0" scope="row">Email</th>
                  <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <th class="font-semibold ps-0" scope="row">Phone No</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->formattedPhone }}</td>
                </tr>
                <tr>
                    <th class="font-semibold ps-0" scope="row">Role</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->userRole }}</td>
                </tr>
                <tr>
                    <th class="font-semibold ps-0" scope="row">Location</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->location }}</td>
                </tr>
              @if(Auth::user()->timezoneAbbreviation)
                <tr>
                    <th class="font-semibold ps-0" scope="row">Timezone</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->timezoneAbbreviation }}</td>
                </tr>
              @endif
                <tr>
                    <th class="font-semibold ps-0" scope="row">Join</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->joinDate }}</td>
                </tr>
                <tr>
                    <th class="font-semibold ps-0" scope="row">Last Login</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->lastLogin ? Auth::user()->lastLogin : 'Never' }}</td>
                </tr>
              @if(Auth::user()->last_ip)
                <tr>
                    <th class="font-semibold ps-0" scope="row">Last IP</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->last_ip }}</td>
                </tr>
              @endif
                <tr>
                    <th class="font-semibold ps-0" scope="row">Status</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->status }}</td>
                </tr>
                <tr>
                    <th class="font-semibold ps-0" scope="row">Online</th>
                    <td class="text-right text-slate-500 dark:text-zink-200">{{ Auth::user()->isOnline }}</td>
                </tr>
                </tbody>
            </table>
        </div>
      </div><!--end card-body-->
    </div>
  </div>
</div>
