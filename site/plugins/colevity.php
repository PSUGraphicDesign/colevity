<? class CL {
  public static function body_classes () {
    $classes = [
      page()->uid(),
      page()->template()
    ];

    # Filter out number-only classes:
    $classes = array_unique(array_filter($classes, function($class) {
      return !preg_match('/^\d+$/', $class);
    }));

    return join($classes, ' ');
  }

  public static function performances_by_date () {
    return page('performances')->children()->sortBy('opening_date');
  }

  public static function workshops_by_date () {
    return page('workshops')->children()->sortBy('date');
  }

  public static function classes_by_date () {
    return page('classes')->children()->sortBy('date');
  }

  public static function all_programming_by_date () {
    $programs = new Pages();
    $programs->add(static::workshops_by_date());
    $programs->add(static::classes_by_date());

    return $programs->sortBy('date');
  }

  public static function troupe_members () {
    return page('troupe')->children();
  }

  public static function social_media_icon_for ($network) {
    $icon = $network['icon'];
    $classes = join(['icon', $icon], ' ');
    return html::a($network['url'], $network['network'], ['class' => $classes]);
  }
}
