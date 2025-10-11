<script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


 <script>
// ======== SEARCH FUNCTION ========
function search() {
  const input = document.getElementById("search-input").value.toLowerCase();
  const items = document.querySelectorAll(".offer-item");
  const noOfferMsgId = "no-offer-msg";

  let found = false;

  items.forEach(item => {
    const name = item.getAttribute("data-name").toLowerCase();
    if (name.includes(input)) {
      item.style.display = "";
      found = true;
    } else {
      item.style.display = "none";
    }
  });

  // Remove old message if it exists
  const existingMsg = document.getElementById(noOfferMsgId);
  if (existingMsg) existingMsg.remove();

  // If no items found, show message
  if (!found) {
    const msg = document.createElement("div");
    msg.id = noOfferMsgId;
    msg.textContent = "No offers found.";
    msg.style.textAlign = "center";
    msg.style.color = "#999";
    msg.style.marginTop = "15px";
    msg.style.fontWeight = "500";
    document.querySelector(".offers-container")?.appendChild(msg);
  }
}


// ======== SORT FUNCTION ========
document.querySelectorAll(".offerSort").forEach(button => {
  button.addEventListener("click", function () {
    const type = this.id; // "low" or "high"
    const container = document.getElementById("offers-ajax");
    const offers = Array.from(container.querySelectorAll(".offer-item"));

    offers.sort((a, b) => {
      const payoutA = parseFloat(a.getAttribute("data-payout")) || 0;
      const payoutB = parseFloat(b.getAttribute("data-payout")) || 0;
      return type === "low" ? payoutA - payoutB : payoutB - payoutA;
    });

    container.innerHTML = "";
    offers.forEach(o => container.appendChild(o));

    const dropdown = bootstrap.Dropdown.getInstance(document.querySelector('.dropdown-toggle'));
    if (dropdown) dropdown.hide();
  });
});
</script>



@stack('post_scripts')
