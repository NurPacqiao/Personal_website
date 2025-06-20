#include <stdio.h>

int main()
{
    int n, m, a, Exit, Exi;

    printf("Welcome to Modern Periodic Table\n\n");
    
    printf("> Enter 1 to know about an element\n\n");
    printf("> Enter 2 to close the periodic table\n\n");

    printf("ENTER: ");
    scanf("%d", &n);

    if (n == 1)
    {
        printf("> Enter 3 to search the element by atomic number\n\n");

        printf("ENTER: ");
        scanf("%d", &m);

        if (m == 3)
        {
            printf("Enter the atomic number to be searched: ");
            scanf("%d", &a);

            if (a == 1)
            {
                printf("Name: Hydrogen\n");
                printf("Symbol: H\n");
                printf("Atomic number: 1\n");
                printf("Electronic configuration: 1s^1\n");
                printf("Discovered By: Henry Cavendish\n");
                printf("Charge: +1\n");
            }
            
        }
        
    }
    else if (n == 2)
    {
        printf("Do you want to exit? (Yes/No)\n");
        printf("> Enter 6 for Yes\n");
        printf("> Enter 7 for No\n");

        printf("ENTER: ");
        scanf("%d", &Exit);

        if (Exit == 6)
        {
            printf("Are you sure? Do you want to close the periodic table (Yes/No)\n");
            printf("> Enter 4 for Yes\n");
            printf("> Enter 5 for No\n");

            printf("ENTER: ");
            scanf("%d", &Exi);

            if (Exi == 4)
            {
                printf("The periodic table has closed\n");
            }
            else if (Exi == 5)
            {
                printf("Periodic table has not closed and you can continue to learn more about elements\n\n");

                printf("Enter the atomic number of the element to be searched: ");
                scanf ("%d", &a);

                if (a == 1)
                {
                    printf("Name: Hydrogen\n");
                    printf("Symbol: H\n");
                    printf("Atomic number: 1\n");
                    printf("Electronic configuration: 1s^1\n");
                    printf("Discovered By: Henry Cavendish\n");
                    printf("Charge: +1\n");
                }
                
            }
            
            
        }

        else if (Exit == 7)
        {
            printf("Periodic table has not closed and you can continue to learn more about elements\n\n");

            printf("Enter the atomic number of the element to be searched: ");
            scanf ("%d", &a);

            if (a == 1)
            {
                printf("Name: Hydrogen\n");
                printf("Symbol: H\n");
                printf("Atomic number: 1\n");
                printf("Electronic configuration: 1s^1\n");
                printf("Discovered By: Henry Cavendish\n");
                printf("Charge: +1\n");
            }
            
        }
        
        
    }
    
    
}