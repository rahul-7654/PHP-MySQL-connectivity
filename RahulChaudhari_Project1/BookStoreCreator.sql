CREATE TABLE `bookinventory` (
  `BookID` int(11) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
);

ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`BookID`);

ALTER TABLE `bookinventory`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;


CREATE TABLE `bookinventoryorder` (
  `orderID` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PaymentOption` varchar(255) NOT NULL,
  `BookID` int(11) NOT NULL
);

ALTER TABLE `bookinventoryorder`
  ADD PRIMARY KEY (`orderID`);

ALTER TABLE `bookinventoryorder`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
