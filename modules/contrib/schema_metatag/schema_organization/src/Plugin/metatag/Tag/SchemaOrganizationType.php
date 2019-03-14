<?php

namespace Drupal\schema_organization\Plugin\metatag\Tag;

use Drupal\schema_metatag\Plugin\metatag\Tag\SchemaTypeBase;

/**
 * Provides a plugin for the 'schema_organization_type' meta tag.
 *
 * - 'id' should be a globally unique id.
 * - 'name' should match the Schema.org element name.
 * - 'group' should match the id of the group that defines the Schema.org type.
 *
 * @MetatagTag(
 *   id = "schema_organization_type",
 *   label = @Translation("@type"),
 *   description = @Translation("REQUIRED. The type of organization."),
 *   name = "@type",
 *   group = "schema_organization",
 *   weight = -10,
 *   type = "string",
 *   secure = FALSE,
 *   multiple = FALSE
 * )
 */
class SchemaOrganizationType extends SchemaTypeBase {

    /**
     * {@inheritdoc}
     */
    public static function labels() {
        return [
            'Organization',
            'Airline',
            'Corporation',
            'EducationalOrganization',
            '- CollegeOrUniversity',
            '- ElementarySchool',
            '- HighSchool',
            '- MiddleSchool',
            '- Preschool',
            '- School',
            'GovernmentOrganization',
            'LocalBusiness',
            '- AnimalShelter',
            '- AutomotiveBusiness',
            '-- AutoBodyShop',
            '-- AutoDealer',
            '-- AutoPartsStore',
            '-- AutoRental',
            '-- AutoRepair',
            '-- AutoWash',
            '-- GasStation',
            '-- MotorcycleDealer',
            '-- MotorcycleRepair',
            '- ChildCare',
            '- Dentist',
            '- DryCleaningOrLaundry',
            '- EmergencyService',
            '-- FireStation',
            '-- Hospital',
            '-- PoliceStation',
            '- EmploymentAgency',
            '- EntertainmentBusiness',
            '-- AdultEntertainment',
            '-- AmusementPark',
            '-- ArtGallery',
            '-- Casino',
            '-- ComedyClub',
            '-- MovieTheater',
            '-- NightClub',
            '- FinancialService',
            '-- AccountingService',
            '-- AutomatedTeller',
            '-- BankOrCreditUnion',
            '-- InsuranceAgency',
            '- FoodEstablishment',
            '-- Bakery',
            '-- BarOrPub',
            '-- Brewery',
            '-- CafeOrCoffeeShop',
            '-- FastFoodRestaurant',
            '-- IceCreamShop',
            '-- Restaurant',
            '-- Winery',
            '- GovernmentOffice',
            '-- PostOffice',
            '- HealthAndBeautyBusiness',
            '-- BeautySalon',
            '-- DaySpa',
            '-- HairSalon',
            '-- HealthClub',
            '-- NailSalon',
            '-- TattooParlor',
            '- HomeAndConstructionBusiness',
            '-- Electrician',
            '-- GeneralContractor',
            '-- HVACBusiness',
            '-- HousePainter',
            '-- Locksmith',
            '-- MovingCompany',
            '-- Plumber',
            '-- RoofingContractor',
            '- InternetCafe',
            '- LegalService',
            '-- Attorney',
            '-- Notary',
            '- Library',
            '- LodgingBusiness',
            '-- BedAndBreakfast',
            '-- Campground',
            '-- Hostel',
            '-- Hotel',
            '-- Motel',
            '-- Resort',
            '- ProfessionalService',
            '- RadioStation',
            '- RealEstateAgent',
            '- RecyclingCenter',
            '- SelfStorage',
            '- ShoppingCenter',
            '- SportsActivityLocation',
            '-- BowlingAlley',
            '-- ExerciseGym',
            '-- GolfCourse',
            '-- HealthClub',
            '-- PublicSwimmingPool',
            '-- SkiResort',
            '-- SportsClub',
            '-- StadiumOrArena',
            '-- TennisComplex',
            '- Store',
            '-- AutoPartsStore',
            '-- BikeStore',
            '-- BookStore',
            '-- ClothingStore',
            '-- ComputerStore',
            '-- ConvenienceStore',
            '-- DepartmentStore',
            '-- ElectronicsStore',
            '-- Florist',
            '-- FurnitureStore',
            '-- GardenStore',
            '-- GroceryStore',
            '-- HardwareStore',
            '-- HobbyShop',
            '-- HomeGoodsStore',
            '-- JewelryStore',
            '-- LiquorStore',
            '-- MensClothingStore',
            '-- MobilePhoneStore',
            '-- MovieRentalStore',
            '-- MusicStore',
            '-- OfficeEquipmentStore',
            '-- OutletStore',
            '-- PawnShop',
            '-- PetStore',
            '-- ShoeStore',
            '-- SportingGoodsStore',
            '-- TireShop',
            '-- ToyStore',
            '-- WholesaleStore',
            '- TelevisionStation',
            '- TouristInformationCenter',
            '- TravelAgency',
            'MedicalOrganization',
            '- Dentist',
            '- Hospital',
            '- Pharmacy',
            '- Physician',
            'NGO',
            'PerformingGroup',
            '- DanceGroup',
            '- MusicGroup',
            '- TheaterGroup',
            'SportsOrganization',
            '- SportsTeam',
        ];
    }

}
