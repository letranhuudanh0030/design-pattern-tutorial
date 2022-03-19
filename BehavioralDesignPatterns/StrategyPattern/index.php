<?php
require_once('Ticket.php');
require_once('NoDiscountStrategy.php');
require_once('QuarterDiscountStrategy.php');
require_once('HalfDiscountStrategy.php');
require_once('EightyDiscountStrategy.php');

/**
 * @param Ticket $ticket
 * @return void
 */
function GeneratePromoteStrategy(Ticket $ticket): void
{
    $strategyIndex = rand(0, 3);
    switch ($strategyIndex) {
        case 0:
            $ticket->setPromoteStrategy(new NoDiscountStrategy());
            break;
        case 1:
            $ticket->setPromoteStrategy(new QuarterDiscountStrategy());
            break;
        case 2:
            $ticket->setPromoteStrategy(new EightyDiscountStrategy());
            break;
        default:
            $ticket->setPromoteStrategy(new HalfDiscountStrategy());
            break;
    }
}

/**
 * @param Ticket $ticket
 * @return void
 */
function LogTicketDetails(Ticket $ticket): void
{
    print "{$ticket->getClass()}: Promoted price of {$ticket->getName()} is {$ticket->getPromotedPrice()}";
    print "\n";
}

print "Start getting tickets! \n";

for ($i = 1; $i <= 5; $i++) {
    $ticket = new Ticket();
    $ticket->setName("Ticket $i");
    $ticket->setPrice(50 * $i);

    GeneratePromoteStrategy($ticket);
    LogTicketDetails($ticket);

    GeneratePromoteStrategy($ticket);
    LogTicketDetails($ticket);
}