import { Routes } from '@angular/router';

import { RegistraoinComponent  } from './registraoin/registraoin.component';
import { LoginComponent } from './login/login.component';
import path from 'path';

export const routes: Routes = [

  {path:'',redirectTo:'login',pathMatch:'full'},
     {path:'registratoin', component: RegistraoinComponent  },
  {path:'login',component:LoginComponent}
];