<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;
use Carbon\Carbon;
class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'property_id' => 1,
                'unit_name' => "Deluxe Twin Bed",
                'unit_picture' => "unit1golden.jpg",
                'unit_description' => "Deluxe room only, non smoking room, twin bed, 2 guests.",
                'total_unit' => 5,
                'price' => 502778,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 1,
                'unit_name' => "Deluxe King Bed",
                'unit_picture' => "unit2golden.jpg",
                'unit_description' => "Deluxe room only, non smoking room, king bed, 2 guests.",
                'total_unit' => 7,
                'price' => 502778,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 1,
                'unit_name' => "Junior Suite King",
                'unit_picture' => "unit3golden.jpg",
                'unit_description' => "Junior Suite with Breakfast for 2 persons, non smoking, king bed",
                'total_unit' => 2,
                'price' => 1705000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 2,
                'unit_name' => "Premier King",
                'unit_picture' => "unit1katamaran.jpg",
                'unit_description' => "Children below 5 years old complimentary breakfast, Children 5 - 11 years old is chargeable at IDR 242,000 per night includes breakfast,
                Children above 11 years old compulsory extra bed IDR 695,750 per night includes breakfast.",
                'total_unit' => 3,
                'price' => 1500000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 2,
                'unit_name' => "Suite King Ocean View",
                'unit_picture' => "unit2katamaran.jpg",
                'unit_description' => "Children below 5 years old complimentary breakfast, Children 5 - 11 years old is chargeable at IDR 242,000 per night includes breakfast,
                Children above 11 years old compulsory extra bed IDR 695,750 per night includes breakfast.",
                'total_unit' => 2,
                'price' => 2277778,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 3,
                'unit_name' => "Deluxe 1 Queen Bed Montain",
                'unit_picture' => "unit1astoria.jpg",
                'unit_description' => "Deluxe Room 1 Queen Bed is spacious Deluxe rooms with two single beds suited for both business and leisure travellers.",
                'total_unit' => 5,
                'price' => 589000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 3,
                'unit_name' => "Deluxe 2 Single Bed",
                'unit_picture' => "unit2astoria.jpg",
                'unit_description' => "Deluxe Room 2 Single Beds are spacious Deluxe rooms with two single beds suited for both business and leisure travellers.",
                'total_unit' => 3,
                'price' => 706000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 4,
                'unit_name' => "Deluxe",
                'unit_picture' => "unit1kayana.jpg",
                'unit_description' => "1 King bed, 2 guests, free breakfast, non smoking room",
                'total_unit' => 2,
                'price' => 1402500,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 4,
                'unit_name' => "Duplex",
                'unit_picture' => "unit2kayana.jpg",
                'unit_description' => "1 King bed, 2 guests, free breakfast, non smoking room",
                'total_unit' => 2,
                'price' => 1845000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 4,
                'unit_name' => "Hillside",
                'unit_picture' => "unit3kayana.jpg",
                'unit_description' => "1 King bed, 2 guests, free breakfast, non smoking room",
                'total_unit' => 1,
                'price' => 3050000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 5,
                'unit_name' => "Deluxe Garden View",
                'unit_picture' => "unit1jayakarta.jpg",
                'unit_description' => "Special request for bedding type are subjected to availability. Air-conditioned room overlooking the garden. Fitted with local artwork, the room interiors combine modern and traditional decor.Air-conditioned room overlooking the garden. Fitted with local artwork, the room interiors combine modern and traditional decor.",
                'total_unit' => 4,
                'price' => 1648171,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 5,
                'unit_name' => "Junior Suite Sea View",
                'unit_picture' => "unit2jayakarta.jpg",
                'unit_description' => "Located at 4 (four) storey Building, a wooden floor rooms, facing to the pool at beach front, 48 sqm = 6m x 8m (included Bath room), an air conditioned room with private bath room & shower, IDD phone, colour TV with international channels (MTV, BBC, DW TV,ESPN Asia & Indonesian Channels, mini bar, private balcony, Tea/ Coffee making facilities, mini kitchenette, microwave, Sofa Bed.",
                'total_unit' => 2,
                'price' => 2583103,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 5,
                'unit_name' => "Standard Double",
                'unit_picture' => "unit3jayakarta.jpg",
                'unit_description' => "1 double bed, 286-sq-foot room, balcony with garden views, free wifi, satellite channels, non smoking room.",
                'total_unit' => 7,
                'price' => 1245543,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 6,
                'unit_name' => "President Suite",
                'unit_picture' => "unit1kami.jpg",
                'unit_description' => "3 rooms with 1 king bed, private pool, free breakfast",
                'total_unit' => 1,
                'price' => 4500000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 7,
                'unit_name' => "Deluxe King Size Bed",
                'unit_picture' => "unit1aruna.jpg",
                'unit_description' => "Our 32 sqm Deluxe room are located in the main room building which designed with modern ethnic interior style and super comfy bed, each room has their own balcony with choices of sea view or hill view for your memorable and perfectly cozy place to stay.",
                'total_unit' => 5,
                'price' => 655424,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 7,
                'unit_name' => "Deluxe Twin Size Bed",
                'unit_picture' => "unit2aruna.jpg",
                'unit_description' => "Our 32 sqm Deluxe room are located in the main room building which designed with modern ethnic interior style and super comfy bed, each room has their own balcony with choices of sea view or hill view for your memorable and perfectly cozy place to stay.",
                'total_unit' => 7,
                'price' => 655424,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 8,
                'unit_name' => "Mavwa Superior",
                'unit_picture' => "unit1svarga.jpg",
                'unit_description' => "Superior room, 2 guests, free breakfast",
                'total_unit' => 7,
                'price' => 909324,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 8,
                'unit_name' => "Qadma Superior Balcony",
                'unit_picture' => "unit2svarga.jpg",
                'unit_description' => "Qadma superior balcony, the room is in top floor, 2 guests, free breakfast",
                'total_unit' => 2,
                'price' => 1218000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 8,
                'unit_name' => "Adna Garden Deluxe",
                'unit_picture' => "unit3svarga.jpg",
                'unit_description' => "Deluxe with garden view, 2 guests, free breakfast",
                'total_unit' => 4,
                'price' => 1302000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 9,
                'unit_name' => "Superior Garden",
                'unit_picture' => "unit1merumatta.jpg",
                'unit_description' => "Room garden view, 1 double bed or 2 single bed, 2 guests, free breakfast",
                'total_unit' => 5,
                'price' => 812500,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 9,
                'unit_name' => "Deluxe Sea View",
                'unit_picture' => "unit2merumatta.jpg",
                'unit_description' => "Room sea view, 1 double bed or 2 single bed, 2 guests, free breakfast",
                'total_unit' => 8,
                'price' => 877500,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 9,
                'unit_name' => "Bungalow Garden View",
                'unit_picture' => "unit3merumatta.jpg",
                'unit_description' => "Bungalow garden, 1 double bed, 2 guests, free breakfast",
                'total_unit' => 2,
                'price' => 910000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 10,
                'unit_name' => "Standard Double",
                'unit_picture' => "unit1grand.jpg",
                'unit_description' => "1 double bed, 2 guests",
                'total_unit' => 5,
                'price' => 144000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 10,
                'unit_name' => "Deluxe Twin",
                'unit_picture' => "unit2grand.jpg",
                'unit_description' => "1 twin bed, 2 guests",
                'total_unit' => 5,
                'price' => 152000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 11,
                'unit_name' => "Deluxe",
                'unit_picture' => "unit1garden.jpg",
                'unit_description' => "Deluxe room only, non smoking room, 2 guests",
                'total_unit' => 5,
                'price' => 340000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 11,
                'unit_name' => "Super Deluxe with Pool View",
                'unit_picture' => "unit2garden.jpg",
                'unit_description' => "Free Daily Tea Time ( coffee or Tea ) at Lotus Cafe, non smoking room, 2 guests",
                'total_unit' => 2,
                'price' => 640000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 12,
                'unit_name' => "Garden View",
                'unit_picture' => "unit1living.jpg",
                'unit_description' => "Garden View Room offering views of the resort's lush tropical landscaping and grounds includes a comforting king bed swathed with fine linens, well appointed with modern and minimalist furniture, and a luxurious array of amenities. Equipped with a casual but elegant chair and table, the private balcony or terrace is an impeccable point to unwind while sipping a cup of morning tea.",
                'total_unit' => 7,
                'price' => 980000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 12,
                'unit_name' => "Room Partial Ocean View",
                'unit_picture' => "unit2living.jpg",
                'unit_description' => "Partial Ocean View offering views of both lush tropical landscaping and partial ocean view from its terrace or balcony. Close to hotel bar and restaurant. Equipped with a casual but elegant chair and table, the private terrace or balcony be equipped with two-person sitting area and coffee table to make your stay echoes the being-at-home feeling",
                'total_unit' => 5,
                'price' => 1100000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 12,
                'unit_name' => "Suite Garden View",
                'unit_picture' => "unit3living.jpg",
                'unit_description' => "The Garden Suite Villa is surrounded of a lush tropical garden and features its own private terrace with two-person sitting area with coffee table which provide an atmosphere of tranquility and relaxation. Best of all, these villa is positioned in a central location close to the hotel's main facilities for the convenience of you and yours and will make your stay an unforgettable experience.",
                'total_unit' => 3,
                'price' => 1350000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 13,
                'unit_name' => "Superior Twin with Mountain View",
                'unit_picture' => "unit1nusantara.jpg",
                'unit_description' => "1 twin bed, 2 guests, free breakfast",
                'total_unit' => 10,
                'price' => 550000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 13,
                'unit_name' => "Superior Double with Mountain View",
                'unit_picture' => "unit2nusantara.jpg",
                'unit_description' => "1 double bed, 2 guests, free breakfast",
                'total_unit' => 10,
                'price' => 550000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 14,
                'unit_name' => "Superior",
                'unit_picture' => "unit1montana.jpg",
                'unit_description' => "1 king bed, 2 guests, without breakfast",
                'total_unit' => 10,
                'price' => 562900,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 14,
                'unit_name' => "Junior Suite",
                'unit_picture' => "unit2montana.jpg",
                'unit_description' => "1 king bed, 2 guests, free breakfast",
                'total_unit' => 8,
                'price' => 1225000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 15,
                'unit_name' => "Deluxe Garden",
                'unit_picture' => "unit1origin.jpg",
                'unit_description' => "Facilities: Garden view, Pool view, Terrace, Satellite Channels, Cable Channels, Flat-screen TV, Safety Deposit Box, Air Conditioning, Iron, Desk, Ironing Facilities, Seating Area,Tile/Marble floor, Wardrobe/Closet, Clothes rack, Shower, Hairdryer, Toilet, Bathroom, Toilet paper, Electric kettle, Outdoor furniture, Wake-up service, Towels, Linen, Entire unit located on ground floor",
                'total_unit' => 8,
                'price' => 600000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 15,
                'unit_name' => "Deluxe Pool",
                'unit_picture' => "unit2origin.jpg",
                'unit_description' => "Facilities: Garden view, Terrace, Satellite Channels, Cable Channels, Flat-screen TV, Safety Deposit Box, Air Conditioning, Iron, Desk, Ironing Facilities, Seating Area, Tile/Marble floor, Wardrobe/Closet, Clothes rack, Shower, Hairdryer, Toilet, Bathroom, Toilet paper, Electric kettle, Outdoor furniture, Wake-up service, Towels, Linen, Entire unit located on ground floor",
                'total_unit' => 5,
                'price' => 700000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 16,
                'unit_name' => "Premier King Sea View",
                'unit_picture' => "unit1amarsvati.jpg",
                'unit_description' => "1 king bed, 2 guests, non smoking room, without breakfast",
                'total_unit' => 5,
                'price' => 385000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 17,
                'unit_name' => "Ananda Pura Partial Ocean View",
                'unit_picture' => "unit1jeeva.jpg",
                'unit_description' => "The Ananda Pura Partial Ocean View offers partial ocean and garden views and is set amidst the lush landscape of frangipanis, mango and palm trees. The garden location brings a hint of cool shade even on the hottest tropical day. In the Ananda Pura Gardenview Suite you can enjoy reading a book on your massive terrace daybed, cool off under your private outdoor rain shower, or watch a movie on your flat screen television. The suite features a luxurious four poster king-size bed with finest quality linens",
                'total_unit' => 10,
                'price' => 1400000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 17,
                'unit_name' => "Ananda Segara Oceanfront",
                'unit_picture' => "unit2jeeva.jpg",
                'unit_description' => "The Ananda Segarra Oceanfront Suite gives you direct access to the beach which is just mere steps away from your front door. Interspersed along the 170 meter beachfront, the suites boast the direct ocean and Bali views that are the pride of Jeeva Klui. You can choose ground floor room or upper room for relax and enjoy the sunset from your comfortable daybed on the beachfront terrace and watch the fishing boats sail across the horizon. The suite features a luxurious four poster king-size bed with finest quality linens and an outdoor shower, as well as some of the best views to be had at Jeeva Klui",
                'total_unit' => 7,
                'price' => 1520000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 17,
                'unit_name' => "Akasha Pool",
                'unit_picture' => "unit3jeeva.jpg",
                'unit_description' => "Get FREE Special Benefits for Honeymoon Couple : 1x Flower arrangement at bedroom, 1x Honeymoon cake, 1x Fruit Basket",
                'total_unit' => 5,
                'price' => 2240000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 18,
                'unit_name' => "Superior 1 King Bed",
                'unit_picture' => "unit1sheraton.jpg",
                'unit_description' => "409-sq-foot individually decorated room, balcony/patio with garden views, In-room massage available, Mini-fridge, minibar, coffee/tea maker, and 24-hour room service",
                'total_unit' => 5,
                'price' => 1271000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 18,
                'unit_name' => "Deluxe 2 Twin Bed Garden View",
                'unit_picture' => "unit2sheraton.jpg",
                'unit_description' => "409-sq-foot individually decorated room, balcony/patio with garden views, In-room massage available, Mini-fridge, minibar, coffee/tea maker, and 24-hour room service",
                'total_unit' => 5,
                'price' => 1514014,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 19,
                'unit_name' => "Eager King",
                'unit_picture' => "unit1illira.jpg",
                'unit_description' => "AC, hairdryer, toiletries, complimentary bottled water, coffee tea maker, safety box, TV, cable TV, free wi-fi, seating area, shower, interconnecting rooms available",
                'total_unit' => 10,
                'price' => 400000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 19,
                'unit_name' => "Eager Twin",
                'unit_picture' => "unit2illira.jpg",
                'unit_description' => "AC, hairdryer, toiletries, complimentary bottled water, coffee tea maker, safety box, TV, cable TV, free wi-fi, seating area, shower, interconnecting rooms available",
                'total_unit' => 10,
                'price' => 400000,
                'created_at' => Carbon::now()->addHour()
            ],
            [
                'property_id' => 20,
                'unit_name' => "Taliwang Special Room",
                'unit_picture' => "unit1grandroyal.jpg",
                'unit_description' => "1 king bed, 2 guests, non smoking room, without breakfast",
                'total_unit' => 2,
                'price' => 400000,
                'created_at' => Carbon::now()->addHour()
            ],
        ];

        Unit::insert($data);
    }
}
