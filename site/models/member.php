<? class MemberPage extends Page {
  public function name () {
    return $this->title();
  }
  
  public function profile_image_thumb ($size = 400) {
    return CL::grayscale_image_of($this->profile_image(), $size);
  }

  public function profile_image () {
    if ( $this->hasImages() ) {
      return $this->images()->first();
    } else {
      return CL::default_profile_image();
    }

  }
}
