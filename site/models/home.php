<? class HomePage extends Page {
  public function hero_image () {
    if ( $this->hasImages() && !$this->hero_background()->empty() ) {
      return CL::grayscale_image_of($this->image($this->hero_background()))->url();
    } else {
      return '';
    }
  }
}
