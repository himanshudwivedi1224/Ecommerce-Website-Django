# Generated by Django 3.0.8 on 2020-08-06 08:24

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('shop', '0016_remove_orders_product_name'),
    ]

    operations = [
        migrations.AddField(
            model_name='orders',
            name='product_name',
            field=models.CharField(default='', max_length=5000),
        ),
    ]
