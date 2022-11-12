INSERT INTO public.tenants (id, created_at, updated_at, data)
VALUES ('campestre', '2022-01-01 14:15:17', '2022-01-04 14:15:17', '{
  "tenancy_db_name": "campestre"
}');


INSERT INTO public.domains (id, domain, tenant_id, created_at, updated_at)
VALUES (1, 'localhost', 'campestre', '2022-01-04 14:19:18', '2022-01-04 14:19:18');
INSERT INTO public.domains (id, domain, tenant_id, created_at, updated_at)
VALUES (2, '127.0.0.1', 'campestre', '2022-01-04 14:19:18', '2022-01-04 14:19:18');