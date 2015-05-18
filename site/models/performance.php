<? class PerformancePage extends Page {
  public function purchase_tickets_link ($color = 'green') {
    return html::a($this->ticket_url(), 'Buy Tickets', [
      'class' => join(['button', $color], ' '),
      'target' => '_blank'
    ]);
  }

  public function all_shows () {
    return $this->shows()->yaml();
  }

  public function first_show () {
    return a::first($this->all_shows());
  }

  public function last_show () {
    return a::last($this->all_shows());
  }
}
