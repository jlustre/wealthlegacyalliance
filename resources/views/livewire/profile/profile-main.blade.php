<div>
  <div class="grid grid-cols-1 gap-x-5 lg:grid-cols-12">
    <div class="lg:col-span-6">
      @include('partials.profile.profile-info')
    </div><!--end col 9-->

    <div class="lg:col-span-3">
      @include('partials.profile.personal-info')
    </div><!--end col 3-->
    <div class="lg:col-span-3">
      @include('partials.profile.awards')
    </div><!--end col 3-->
  </div>
  @include('partials.profile.edit-profile-modal')
  <div class="tab-content">
    @include('partials.profile.tabOne')
    @include('partials.profile.tabTwo')
    @include('partials.profile.tabThree')
    @include('partials.profile.tabFour')
    @include('partials.profile.tabFive')
  </div><!--end tab content-->
</div>
