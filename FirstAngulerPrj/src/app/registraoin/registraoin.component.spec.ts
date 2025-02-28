import { ComponentFixture, TestBed } from '@angular/core/testing';

import { RegistraoinComponent } from './registraoin.component';

describe('RegistraoinComponent', () => {
  let component: RegistraoinComponent;
  let fixture: ComponentFixture<RegistraoinComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [RegistraoinComponent]
    })
    .compileComponents();

    fixture = TestBed.createComponent(RegistraoinComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
