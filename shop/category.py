def cat():
    cat_list = [
        ('puja kits', 'Puja Kits'),
        ('puja essentials', 'Puja Essentials'),
        ('Rangoli', 'Rangoli'),
        ('Diya', 'Diya'),
        ('Dhoop/camphor', 'Dhoop/Camphor'),
        ('Havan Items', 'Havan Items'),
        ('Puja Thali', 'Puja Thalis'),
        ('chunris', 'Chunris'),
        ('idols', 'Godd Idols'),
        ('god cloths', 'God Cloths'),
        ('Rudraksha and Yantra', 'Rudraksh and Yantra'),
        ('Gem Stone and Jewelry', 'Gem Stone and Jewelry'),
        ('Brass Idols', 'Brass Idols'),
    ]
    cat_list.sort(key=lambda x: x[0])
    return cat_list
