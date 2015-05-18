<? class HomePage extends Page {
  public function hero_image () {
    if ( $this->hasImages() && !$this->hero_background()->empty() ) {
      return $this->image($this->hero_background())->url();
    } else {
      return '';
    }
  }
}
