@startuml
'https://plantuml.com/class-diagram

class Equipment {
    -items : Item[]

}







Equipment "1" <-- "1" Character



abstract class Character {
    -name : string
    -health : int
    -equipment : Equipment
    +{abstract}attack( Character target ) : void
    +isAlive() : bool
    +die() : void
    +getHurted(int damage) : void

}

class Mage {
    -Mana : int
    +spell( Character target ) : void
    +attack( Character target ): void
    +move() : void
    +jump() : void
}

class Warrior {
    -rage : int
    +slash( Character target ) : void
    +attack( Character target ) : void
    +move() : void
    +jump() : void
}

Character <|-- Mage
Playable <|.. Mage
Character <|-- Warrior
Playable <|.. Warrior
Character <|-- Mob
Mob <|-- Elite

Lootable <|.. Mob


interface Playable {
+ move() : void
+ jump() : void
}
interface Lootable {
+ loot() : Item[]
}
class Mob {
    + loot() : Item[]
    +isAggro( Character target ) : bool
    +attack( Character target ) : void
}

class Elite {
    +isAggro( Character target ) : bool
    +attack( Character target ) : void
    +specialAttack( Character target ) : void
}

enum ItemQuality {
  UNCOMMON,
  RARE,
  EPIC,
  LEGENDARY,
  ARTIFACT,
  MYTHIC
}




enum ItemCategory {
  WEAPON_1H,
  WEAPON_2H,
  SHIELD,
  JEWEL,
  WAND,
  BOOK,
  STAFF
}

namespace  Design_Pattern_BUILDER  {

note as A

    <b>Pour générer un item :</b>
    director = new Director()
    ItemBuilder builder = new ItemBuilder()
    director.makeEpicItem(builder)
    Item sword = builder.getResult()
end note

interface Builder {
    +reset()
    +AddName( string name )
    +AddQuality( ItemQuality quality )
    +AddDropRate( int dropRate )
    +AddCategory()
    +addBonusDamage( int damage )
    +AddBonusHp( int hp )
    +AddBonusRage( int rage )
    +AddBonusMana( int mana )
    +AddBonusProtection( int protection )
}




class Director {
    +makeUncommonItem( Builder builder )
    +makeRareItem( Builder builder )
    +makeEpicItem( Builder builder )
    +makeLegendaryItem( Builder builder )
    +makeArtifactItem( Builder builder )
    +makeMythicItem( Builder builder )
    +makeLameTonnerre(Builder builder)
    +makeGlamdring(Builder builder)

}

class ItemBuilder {
    - item : Item
    +reset()
    +AddName( string name )
    +AddQuality( Quality quality )
    +AddDropRate( int dropRate )
    +AddCategory()
    +addBonusDamage( int damage )
    +AddBonusHp( int hp )
    +AddBonusRage( int rage )
    +AddBonusMana( int mana )
    +AddBonusProtection( int protection )

    +GetResult() : Item
}

ItemBuilder --|> Builder

class Item {
    -name : string
    -quality : Quality
    -dropRate : int
    -category : ItemCategory
    -quality: ItemQuality
    -BonusDamage : int
    -BonusHp: int
    -BonusRage : int
    -BonusMana : int
    -BonusProtection : int
}

Item <-- ItemBuilder
Item <-- Equipment









    Director -> Builder
    Builder --> ItemCategory
    Builder -> ItemQuality



    clientApp --> Director
    clientApp ..> ItemBuilder

}




@enduml





