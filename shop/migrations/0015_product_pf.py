# Generated by Django 3.0.8 on 2020-08-05 18:13

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('shop', '0014_auto_20200805_1638'),
    ]

    operations = [
        migrations.AddField(
            model_name='product',
            name='pf',
            field=models.CharField(default='', max_length=300),
        ),
    ]
