<? class MemberPage extends Page {
  public function name () {
    return $this->title();
  }
  
  public function profile_image ($size = 400) {
    if ( $this->hasImages() ) {
      $image = $this->images()->first();
    } else {
      $image = CL::default_profile_image();
    }

    return CL::grayscale_image_of($image, $size);
  }
}
