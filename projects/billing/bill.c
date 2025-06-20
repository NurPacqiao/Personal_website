#include <stdio.h>
#include <string.h>

int main()
{
    char name[50];
    int phone_number;
    int customer_id;

    int body_soap;
    int hair_cream;
    int hair_spray;
    int body_spray;

    int sugar;
    int tea;
    int coffee;
    int rice;
    int wheat;

    int pepsi;
    int sprite;
    int coke;
    int mojitos;
    int thumbs_up;

    int total;
    int cosmetics_total;
    int grocery_total;
    int beverage_total;

    int boso, hc, hs, bosp;
    int su, te, co, ri, wh;
    int pe, sp, c, mo, th;


    char *vars[] = {"Body Soap", "Hair Cream", "Hair Spray", "Body Spray", "Sugar", "Tea", "Coffee", "Rice", "Wheat", "Pepsi", "Sprite", "Coke", "Mojitos", "Thumbs_up"};

    int var[] = {body_soap, hair_cream, hair_spray, body_spray, sugar, tea, coffee, rice, wheat, pepsi, sprite, coke, mojitos, thumbs_up};
    
    int price[] = {10, 25, 50, 50, 13, 20, 50, 35, 40, 12, 13, 15, 10, 9};

    int num[] = {boso, hc, hs, bosp, su, te, co, ri, wh, pe, sp, c, mo, th};

    int length = sizeof(vars) / sizeof(vars[0]);

    printf("---------------------\n");
    printf("BILLING SYSTEM\n");
    printf("---------------------\n");
    printf("Customer Details\n\n");

    printf("Customer Name: ");
    scanf("%s", &name);

    printf("Customer Number: ");
    scanf("%d", &phone_number);

    printf("Customer Id: ");
    scanf("%d", &customer_id);

    printf("---------------------\n");

    printf("COSMETICS\n\n");


    for(int i = 0; i < 4; i++)
    {
        printf("%s: ", vars[i]);
        scanf("%d", &var[i]);
    }

    printf("---------------------\n");

    printf("GROCERIES\n\n");

    for(int i = 4; i < 9; i++)
    {
        printf("%s: ", vars[i]);
        scanf("%d", &var[i]);
    }

    printf("---------------------\n");
    printf("BEVERAGES\n\n");

    for(int i = 9; i < length; i++)
    {
        printf("%s: ", vars[i]);
        scanf("%d", &var[i]);
    }

    printf("---------------------\n");

    for (int i = 0; i < length; i++)
    {
        num[i] = price[i] * var[i];
    }
    

    cosmetics_total = num[0] + num[1] + num[2] + num[4];

    grocery_total = num[5] + num[6] + num[7] + num[8];

    beverage_total = num[9] + num[10] + num[11] + num[12] + num[13];

    total = cosmetics_total + grocery_total + beverage_total;


    printf("---------------------------------------------------------------\n");

    for (int  i = 0; i < length; i++)
    {
        printf("%s: %d PLN\n", vars[i], num[i]);
    }


    printf("---------------------\n");

    printf("Total Cosmetics Price: %d PLN\n", cosmetics_total);

    printf("Total Grocery Price: %d PLN\n", grocery_total);

    printf("Total Beverage Price: %d PLN\n", beverage_total);

    printf("Total Amount: %d PLN\n", total);

    printf("---------------------\n");
    printf("---------------------------------------------------------------\n");

    printf("LIDL Polska\n\n");
    printf("Customer Name: %s\n", name);

    printf("Customer Phone Number: %d\n", phone_number);

    printf("Customer Id: %d\n", customer_id);


    int space = 0;
    for(int i = 0; i < length; i++)
    {
        int ff = strlen(vars[i]);
        if (ff > space)
        {
            space = ff;
        }
        
    }

    char *words[] = {"Product name", "Quantity", "Price"};

    printf("%-*s\t\t %-10s\t\t %-10s\n\n", space, words[0], words[1], words[2]);


    for (int i = 0; i < length; i++)
    {
        printf("%-*s\t\t %-10d\t\t %-10d\n", space, vars[i], var[i], num[i]);
    }

    printf("---------------------------------------------------------------\n");

    printf("Total Cosmetics Price: %d PLN\n", cosmetics_total);

    printf("Total Grocery Price: %d PLN\n", grocery_total);

    printf("Total Beverage Price: %d PLN\n", beverage_total);

    printf("Total Amount: %d PLN\n", total);

    printf("---------------------------------------------------------------\n");
}