import { defineCollection, z } from 'astro:content'
import { glob } from 'astro/loaders'

const projects = defineCollection({
    loader: glob({ pattern: '**/*.md', base: './src/content/projects' }),
    schema: z.object({
        titre: z.string(),
        slug: z.string().optional(),
        date: z.string(),
        type: z.string().optional(),
        stack: z.array(z.string()),
        tag: z.array(z.string()).optional(),
        une: z.boolean().optional(),
        lienSite: z.string().optional(),
        lienGithub: z.string().optional(),
        image: z.string().optional(),
        desc: z.string().optional(),
        metriques: z.array(
        z.object({
            valeur: z.string(),
            label: z.string(),
        })
        ).optional(),
        demarche: z.array(
        z.object({
            num: z.string(),
            title: z.string(),
            body: z.string(),
        })
        ).optional(),
        retenue: z.string().optional(),
    }),
});

export const collections = { projects };