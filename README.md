English Version: Code that is used to display alert message about the user canceled/refunded order percentage in the edit order admin page of WooCommerce. With the above code snippet we take all the orders that have been made
with the customer email of the order the shop manager sees, we check the statuses:
1) if there are orders canceled/refunded we increase a number
2) if there are failed orders we increase a number
3) we take the total orders ($totalOrders - $failedOrder - 1(so we don't count the one we see))

Then we get the percentage $canceledPercentage = ($canceledOrders / $totalOrders) * 100; And according to it's value we print a string with the corresponding color.

Greek Version: Κώδικας που χρησιμοποιείται για την εμφάνιση μηνύματος ειδοποίησης σχετικά με το ποσοστό παραγγελιών που ακυρώθηκαν/επιστράφηκαν από τον χρήστη στη σελίδα διαχείρισης παραγγελίας του WooCommerce. Με το παραπάνω
απόσπασμα κώδικα λαμβάνουμε όλες τις παραγγελίες που έχουν πραγματοποιηθεί με το email του πελάτη της παραγγελίας που βλέπει ο υπεύθυνος του καταστήματος, ελέγχουμε τις καταστάσεις:
1) εάν υπάρχουν παραγγελίες που ακυρώνονται/επιστρέφονται, αυξάνουμε έναν αριθμό
2) αν υπάρχουν αποτυχημένες παραγγελίες αυξάνουμε έναν αριθμό
3) λαμβάνουμε τις συνολικές παραγγελίες ($totalOrders - $failedOrder - 1 (για να μην μετράμε αυτή που βλέπουμε))

Στη συνέχεια, παίρνουμε το ποσοστό $cancededPercentage = ($cancededOrders / $totalOrders) * 100; Και ανάλογα με την τιμή του εκτυπώνουμε το μήνυμα με το αντίστοιχο χρώμα.
