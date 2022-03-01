<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Stock;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {
        $usersArray = [
            [
                'FirstName' => 'John',
                'LastName' => 'John',
                'Email'=> 'John@gmail.com',
                'Picture' => 'https://funstock.s3.eu-west-3.amazonaws.com/john.jpg?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T101930Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=4ab9c28888ca47ea5ded95f6eb561281cf180d1de7a5fd916517e61b2a386e2a'
            ],
            [
                'FirstName' => 'Paul',
                'LastName' => 'Newton',
                'Email'=> 'https://funstock.s3.eu-west-3.amazonaws.com/paul.jpg?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T102156Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=3a2c03b4838489f98cb89aba26e4b91272339bafe6edc6f85638c4c49e4db832',
                'Picture' => 'uploads/paul.jpg'
            ],
            [
                'FirstName' => 'Georges',
                'LastName' => 'Smith',
                'Email'=> 'Georges@gmail.com',
                'Picture' => 'https://funstock.s3.eu-west-3.amazonaws.com/georges.jpg?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T101853Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=d262b636d6d7a3b801899cabf95a3725f1d0cc43bcb5c3179f6a5fc2ffb93255'
            ],
        ];

        foreach($usersArray as $userArray){
            $user = new User;
            foreach($userArray as $key => $value) {
                $setter = 'set'.$key;
                $user->$setter($value);
            }
            $user->setPassword($this->passwordHasher->hashPassword($user, 2707));
            $manager->persist($user);
        }

        $stockArrayList = [
            [
                'name' => 'Apple',
                'symbol'=> 'AAPL',
                'current_price' => 160,07,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/apple_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T101721Z&X-Amz-SignedHeaders=host&X-Amz-Expires=299&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=df437efe2cac3e7f78f2f10bedd773121dbd9d2a57a251ad521b000041b03167',
                'type' => 'company',
                'last 30 days evolution' => '+6'
            ],
            [
                'name' => 'Bitcoin',
                'symbol'=> 'BTC',
                'current_price' => 31586.31,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/bitcoin_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T101741Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=b2c639c5d61eff4170cffccac32591772635712ade5ea59d565fe8cab9e8a2cd',
                'type' => 'crypto',
                'last 30 days evolution' => '+5'
            ],
            [
                'name' => 'Ethereum',
                'symbol'=> 'ETH',
                'current_price' => 2126.91,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/ethereum_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T101821Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=5bdfdfa4d7c81a0940341d4de9e24f8c840fa0d97d03e50bd6af8963c1f061bd',
                'type' => 'crypto',
                'last 30 days evolution' => '-9'
            ],
            [
                'name' => 'Litecoin',
                'symbol'=> 'LIT',
                'current_price' => 83.72,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/litecoin_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T102021Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=6fc35a07362d62146f7a44673cacbb6ecaa05c29d8b060b51201e9471e93b300',
                'type' => 'crypto',
                'last 30 days evolution' => '+19'
            ],
            [
                'name' => 'Microsoft',
                'symbol'=> 'MSFT',
                'current_price' => 280.27,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/microsoft_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T102109Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=ef0b7b1024b0f89ea35b74d1f38cdd844c73f968078c0e13794e42e131317bd9',
                'type' => 'company',
                'last 30 days evolution' => '-3'
            ],
            [
                'name' => 'Airbus',
                'symbol'=> 'AIR',
                'current_price' => 107.22,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/airbus_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T101536Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=4419706daeaee36d3b1bc379bc80b6778b082f9025a09c89128fc4b0bf987a99',
                'type' => 'company',
                'last 30 days evolution' => '+7'
            ],
            [
                'name' => 'Palantir',
                'symbol'=> 'PLTR',
                'current_price' => 10.43,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/palantir_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T102131Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=b7ed28f2ddb1a85f31842127b7769ca15e93b133ac7e630bb79588941a5c25d1',
                'type' => 'company',
                'last 30 days evolution' => '-11'
            ],
            [
                'name' => 'TSMC',
                'symbol'=> 'TWD',
                'current_price' => 604,
                'logo' => 'https://funstock.s3.eu-west-3.amazonaws.com/tsmc_logo.png?response-content-disposition=inline&X-Amz-Security-Token=IQoJb3JpZ2luX2VjEHoaCWV1LXdlc3QtMyJGMEQCIHaUAhFmw5a%2B3OnNHe13hIavj9irmU1zgUK39Krpuvu9AiAsWyz6CUR7Sxyri%2FP6SPsaLDPnQyuWEyV4P76zBIDYISrtAgjT%2F%2F%2F%2F%2F%2F%2F%2F%2F%2F8BEAAaDDMwNTYyMDU0Mzc1OCIMYMuu%2FYr%2BtIV%2FHtePKsECOgcrCK5Bl6ePTUty4%2BNW4f5lYaDoqZNbAtcr0iGSnge%2BcsyYaYAanUBc8JsGCy440xKjK1c4KgrVlp68NBQDCetjElB%2FlHNH3gFU6dd%2FH6eko9HZWDbXJeXgXvUaJKhfxCJSSEbfxe6dsdSLg70HZbWprIyhEamFT%2Fp3Tsy2GscUrXyJSBTfUqXcOE%2BsFoHXO61kVe6hKpWYE3dTIlJycW35bkczD3Vd5yFSx4qNrCp%2F9xSD6wVGHayKODnAHintaITWJgIuAZpzVvu8YH9K84D7PW2r1a68tdwRPraOaRmlMLX3M9Mfqz%2FESu%2BWOkuqJjlHN%2F03JZB2VITUNhGO%2B6hxH6lr3OlM0ceXtAQVKiWkxO044EpDrB6LqmU7rXiT4vfmF%2FJ3PqXRpimI5fJa9D9RmysKOUtEVp90DQqH9ebSMPCc7ZAGOrQCFmSewDFVtTtT4zOCzlYsdsPRZeACCQNRmZFgn5N8%2BxUdUF618b6bFuTtkgHJXxqTJVyReiVuH%2FBsiZyUp1Oy%2BrBJ6BCx9YYumWEakp2Oe7ijWtUNmqu1HNUfP9bk82jHMsM40zRD%2FCgMan1ClPDB3zYUMLF9I9hYWuPJlebxi5s4he4qxiICouLqUsIb0BWBCU5tqzhAEivOVc350ERdQcmXoPe3H3fIeHIIumbnukH8fPT6D5zcdH%2FssnChXElHmefji7WhLI5y36BcTzZzKPvakb0LCGoMZoWLdTPWVPs1yAMnzlXFuq8obOpi0fPcZ%2F7Uxk3fVPw%2FjyPMPeZB%2BiJe3PwABWsBfU3e2BKRyvyQ5XamUXHTJ8tu7VSt0g5qVuCjLppWiAVlGR1KXJBZpnm%2FvQ4%3D&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20220227T102335Z&X-Amz-SignedHeaders=host&X-Amz-Expires=300&X-Amz-Credential=ASIAUOKDHNEHJ5BIFVOD%2F20220227%2Feu-west-3%2Fs3%2Faws4_request&X-Amz-Signature=386029ecc1a0e7d33c832be92ad21cb0f65744c3a8f8befa8fe194e45b8298ec',
                'type' => 'company',
                'last 30 days evolution' => '+29'
            ],
        ];

        foreach($stockArrayList as $stockArray){
            $stockObject = new Stock;
            $stockObject->setCompanyName($stockArray['name'])
                        ->setCurrentPrice($stockArray['current_price'])
                        ->setSymbol($stockArray['symbol'])
                        ->setLogo($stockArray['logo'])
                        ->setType($stockArray['type'])
                        ->setLast30DaysEvolution($stockArray['last 30 days evolution'])
            ;

            $manager->persist($stockObject);
        }
        $manager->flush();
    }
}
