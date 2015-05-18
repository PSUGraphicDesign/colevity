<? return function ($site, $pages, $page) {
  return [
    'featured_performance' => CL::performances_by_date()->find($page->featured_performance()),
    'about' => page('about'),
    'contact' => page('contact'),
    'giving' => page('giving'),
    'performances' => CL::performances_by_date(),
    'next_performance' => CL::performances_by_date()->first(),
    'classes' => CL::classes_by_date(),
    'workshops' => CL::workshops_by_date(),
    'programs' => CL::all_programming_by_date(),
    'troupe' => CL::troupe_members()
  ];
};
